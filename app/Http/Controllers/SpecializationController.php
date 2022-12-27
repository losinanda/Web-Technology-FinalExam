<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Specialization;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $s = Specialization::orderBy('updated_at', 'desc')->paginate(5);
        return view('backpage.specialization',['s' => $s]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array_merge([
            'name_specialization'     => $request->sp_name
        ]);
        Specialization::create($data);
        return redirect()->route('admin_specializationdoctor');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Specialization::find($id);
        return view('backpage.edit_specialization',['sp' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = Specialization::find($id);
        $collect = array_merge(['name_specialization' => $request->sp_name]);
        $data->update($collect);
        return redirect()->route('admin_specializationdoctor');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Specialization::find($id)->delete();
        return redirect()->route('admin_specializationdoctor');
    }

    public function search()
    {
        // $all = Specialization::all();
        $s = new Specialization();
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $s = $s->where('name_specialization', 'like', "%$search%");
        }
        $s = $s->paginate(5);
        return view('backpage.specialization', compact('s'));
    
    }
}
