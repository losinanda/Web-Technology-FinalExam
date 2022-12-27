<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Specialization;
use App\Models\Post;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard() {
        $form = Form::all()->count();
        $sp = Specialization::all()->count();
        $doctor = Doctor::all()->count();
        $med = Post::all()->count();
        return view('backpage.dashboard',compact('form', 'sp','doctor','med'));
    }
    
     public function index()
    {
        $doctor = Doctor::orderBy('updated_at', 'desc')->paginate(5);
        $s = Specialization::all();
        return view('backpage.doctor', compact('doctor', 's'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Specialization::all();
        return view('backpage.add_doctor', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'doctor_img'     => 'required',
        //     'doctor_name'   => 'required',
        //     'specialization'   => 'required',
        //     'doctor_desc'     => 'required',
        //     'phone_num'     => 'required',
        //     'address'     => 'required',
        //     'education'     => 'required',
        //     'university'     => 'required',
        // ]);

        $save = $request->file('image');
        $name = time() . $save->getClientOriginalName();
        $path = $request->file('image')->storeAs('assets/images', $name);
        $save->move(\base_path() . "/public/assets/images", $name);

        // $save = DB::table('doctors')->insert(['doctor_img' => $name]);
        $hash = Hash::make($request->password);
        $data = array_merge([
            'doctor_name'     => $request->doctor_name,
            'phone_num'     => $request->phone_num,
            'address'     => $request->address,
            'education'     => $request->education,
            'university'     => $request->university,
            'specialization'   => $request->specialization,
            'doctor_desc'   => $request->doctor_desc,
            'email'   => $request->email,
            'password'   => $hash,
            'doctor_img' => $path,

        ]);

        Doctor::create($data);
        return redirect()->route('admin_listdoctor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data   = Doctor::find($id);
        $s = Specialization::all();
        return view('backpage.edit_doctor', ['d' => $data, 's' => $s]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = Doctor::find($id);
        $save = $request->file('image');
        // $check = \public_path(). "/". $data->doctor_img;
        // dd($check);
        if ($save != null) {
            if (File::exists(\public_path(). "/". $data->doctor_img)) {
                File::delete(\public_path(). "/". $data->doctor_img);
                $name = time() . $save->getClientOriginalName();
                $path = $request->file('image')->storeAs('assets/images', $name);
                $save->move(\base_path() . "/public/assets/images", $name);;
                $data->doctor_img = $path;
            }
        };

        $save = $request->doctor_desc;
        if ($save != null) {
            $data->update(['doctor_desc' => $save]);
        }

        // $pass = $request->password;
        $hash = Hash::make($request->password);
        $collect = array_merge([
            'doctor_name'    => $request->doctor_name,
            'phone_num'     => $request->phone_num,
            'address'   => $request->address,
            'education'    => $request->education,
            'university'   => $request->university,
            'specialization'  => $request->specialization,
            'email'  => $request->email,
            'password'  => $hash,
            // 'doctor_desc'   => $request->doctor_desc,
        ]);

        $data->update($collect);
        return redirect()->route('admin_listdoctor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Doctor::find($id);
        if (File::exists(\public_path(). "/". $data->doctor_img)) {
            File::delete(\public_path(). "/". $data->doctor_img);
        }
        $data->delete();
        return redirect()->route('admin_listdoctor');
    }

    public function search()
    {
        $s = Specialization::all();
        $doctor = new Doctor;
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $doctor = $doctor->where('doctor_name', 'like', "%$search%");
        }
        if (isset($_GET['filter']) && $_GET['filter'] != '') {
            $doctor = $doctor->where('specialization', $_GET['filter']);
        }
        $doctor = $doctor->paginate(5);
        return view('backpage.doctor', compact('doctor', 's'));
    }
}
