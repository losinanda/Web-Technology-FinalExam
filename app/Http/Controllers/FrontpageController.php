<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Form;
use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    // public function cart ($id) {
    //     $data   = Doctor::where('id_doctor',$id)->first();
    //     return view('frontpage.form')->with('data', $data);
    // }
    
    public function get_form ($id) {
        $data   = Doctor::where('id_doctor',$id)->first();
        return view('frontpage.form')->with('data', $data);
    }
    public function post_form (Request $request) {
        $data = array_merge($request->all());
        Form::create($data);
        return redirect()->back();
    }
    public function list_doctor (){
        $data = Doctor::paginate(6);
        return view('frontpage.doctor', ['doctor' => $data]);
    }

    // public function dashboard() {
    //     return view('frontpage.dashboard');
    // }
}