<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    
    public function index(){
         return view('viewDok.LoginDokter', [
            "title"=> "Login"
        ]);
     }
    public function home(){
        return view('viewDok.Home', [
            "title" => "Home"
        ]);
    }
    public function dokter(){
        return view('viewDok.dokter', [
            "title" => "Dokter"
        ]);
    }
    public function obat(){
        return view('viewDok.Obat', [
            "title" => "Obat",
            "posts" => Post::all()
        ]);
    }
    public function adminObat(){
        return view('viewDok.adminObat', [
            "title" => "Obat Admin",
            "posts" => Post::all()
        ]);
    }
    public function create(){
        $model = new Post;
        $title = "create page";
        return view('viewDok.create', compact(
            'model', 'title'
        ));
    }
    // public function store(Request $request){
    //     $save = $request->file('image');
    //     $name = time() . $save->getClientOriginalName();
    //     $path = $request->file('image')->storeAs('assets/images', $name);

    //     $save->move(\base_path() . "/public/assets/images", $name);
    //     $model = array_merge([
    //         'nama'     => $request->nama,
    //         'harga'   => $request->harga,
    //         'toko'   => $request->toko,
    //         'category_id'=> $request->category_id,
    //         'image' => $path,
    //     ]);

    //     Post::create($model);
    //     return redirect('Adminobat');
    // }
    public function store(Request $request){
        $model = new Post;
        $model->nama = $request->nama;
        $model->harga = $request->harga;
        $model->toko = $request->toko;
        $model->category_id = $request->category_id;
        $save = $request->file('image');
        $name = time() . $save->getClientOriginalName();
        $path = $request->file('image')->storeAs('assets/images', $name);

        $save->move(\base_path() . "/public/assets/images", $name);
        $model->image = $path;
        $model->save();

        return redirect('Adminobat');
    }
    public function edit($id)
    {
        $model = Post::find($id);
        $title = "Edit Page";
        return view('viewDok.edit', compact(
            'model', 'title'
        ));
    }
    public function update(Request $request, $id){
        
        $model = Post::find($id);
        $model->nama = $request->nama;
        $model->harga = $request->harga;
        $model->toko = $request->toko;
        $model->category_id = $request->category_id;
        $save = $request->file('image');
        if ($save != null) {
            if (File::exists(\public_path(). "/". $model->image)) {
                File::delete(\public_path(). "/". $model->image);
                $name = time() . $save->getClientOriginalName();
                $path = $request->file('image')->storeAs('assets/images', $name);
                $save->move(\base_path() . "/public/assets/images", $name);;
                $model->image = $path;
            }
        };
        $model->save();

        return redirect('Adminobat');
    }
    public function destroy($id){
        $model = Post::find($id);
        $model ->delete();
        return redirect('Adminobat');
    }
    public function percobaan(){
        return view('viewDok.edit2', [
           "title"=> "Percobaan"
       ]);
    }
}