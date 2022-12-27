<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Doctor::where('id_doctor', $id)
        //     ->join('forms', 'id_doctor', '=', 'forms.doctor')
        //     ->select('doctors.*', 'forms.*')
        //     ->get();
        $data = Form::orderBy('updated_at', 'desc')->paginate(5);
        // dd($data);
        return view('backpage.form-list.form', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function info($id)
    {
        //
        $data = Form::find($id);
        return view('backpage.form-list.info_form', ['d' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_note(Request $request, $id)
    {
        //
        $data = Form::find($id);
        $collect = array_merge(['doctor_note' => $request->desc]);
        $data->update($collect);
        return redirect()->route('admin_formuser');
    }

    public function store_approval(Request $request, $id)
    {
        $data = Form::find($id);
        $reject = $request->reject;
        $approve = $request->approve;
        if ($approve != null) {
            $collect = array_merge(['accept' => $request->approve]);
        } else if ($reject != null) {
            $collect = array_merge(['accept' => $request->reject]);
        }

        $data->update($collect);
        return redirect()->route('admin_formuser');
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
    }

    public function search()
    {
        // $data = Form::paginate(5);
        $data = new Form;
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $data = $data->where('form_name', 'like', "%$search%");
        }
        if (isset($_GET['filter']) && $_GET['filter'] != '') {
            $data = $data->where('accept', $_GET['filter']);
        }
        $data = $data->paginate(5);
        return view('backpage.form-list.form', compact('data'));
    }
}
