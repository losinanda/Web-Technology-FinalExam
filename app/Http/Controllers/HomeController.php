<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{

    // public function index(){
    //      return view('viewDok.LoginDokter', [
    //         "title"=> "Login"
    //     ]);
    //  }
    // public function home(){
    //     return view('viewDok.Home', [
    //         "title" => "Home"
    //     ]);
    // }
    // public function dokter(){
    //     return view('viewDok.dokter', [
    //         "title" => "Dokter"
    //     ]);
    // }

    public function obat()
    {
        return view('viewDok.Obat', [
            "title" => "Obat",
            "posts" => Post::all()
        ]);
    }
    public function desc_obat($id)
    {
        $p = Post::find($id);
        return view('viewDok.ObatDesc', [
            "title" => "Desc Obat",
            "posts" => $p
        ]);
    }
    public function adminObat()
    {
        $s = Post::paginate(5);
        $sp = Category::all();
        return view('backpage.medicine-list.medicine-list', [
            // "title" => "Obat Admin",
            "posts" => $s,
            "s" => $sp
        ]);
    }

    public function search_obat()
    {
        //$s = Category::all();
        $post = new Post;
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $post = $post->where('nama', 'like', "%$search%");
        }
        if (isset($_GET['filter']) && $_GET['filter'] != '') {
            $post = $post->where('category_id', $_GET['filter']);
        }
        $post = $post->paginate(5);
        return view('backpage.medicine-list.medicine-list', compact('doctor'));
    }

    public function create()
    {
        $model = new Post;
        // $title = "create page";
        return view('backpage.medicine-list.add_medicine', compact(
            'model'
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

    // public function percobaan(){
    //     return view('viewDok.edit2', [
    //        "title"=> "Percobaan"
    //    ]);
    // }

    public function store(Request $request)
    {
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
        // $title = "Edit Page";
        return view('backpage.medicine-list.edit_medicine', compact(
            'model',
        ));
    }
    public function update(Request $request, $id)
    {

        $model = Post::find($id);
        $model->nama = $request->nama;
        $model->harga = $request->harga;
        $model->toko = $request->toko;
        $model->category_id = $request->category_id;
        $save = $request->file('image');
        if ($save != null) {
            if (File::exists(\public_path() . "/" . $model->image)) {
                File::delete(\public_path() . "/" . $model->image);
                $name = time() . $save->getClientOriginalName();
                $path = $request->file('image')->storeAs('assets/images', $name);
                $save->move(\base_path() . "/public/assets/images", $name);;
                $model->image = $path;
            }
        };
        $model->update();
        return redirect('Adminobat');
    }

    public function destroy($id)
    {
        $model = Post::find($id);
        $model->delete();
        return redirect('Adminobat');
    }
}
