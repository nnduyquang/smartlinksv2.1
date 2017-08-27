<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $emps = Employee::orderBy('id', 'DESC')->paginate(5);
        return view('backend.admin.employee.index', compact('emps'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.employee.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emp = new Employee();
        $empName = $request->input('emp_name');
        $empPhone = $request->input('emp_phone');
        $empEmail = $request->input('emp_email');
        $empDuty = $request->input('emp_duty');
        $empSkype = $request->input('emp_skype');
        $empImage = $request->input('emp_image');
        $empOrder=$request->input('emp_order');
        if($empOrder){
            $emp->emp_order = $empOrder;
        }else{
            $emp->emp_order = 1;
        }
        $empNote = $request->input('emp_note');
        $empImage = substr($empImage, strpos($empImage, 'images'), strlen($empImage) - 1);
        $emp->emp_name = $empName;
        $emp->emp_phone = $empPhone;
        $emp->emp_email = $empEmail;
        $emp->emp_duty = $empDuty;
        $emp->emp_skype = $empSkype;
        $emp->emp_note = $empNote;

        $emp->emp_image = $empImage;
        $emp->save();
        return redirect()->route('emp.index')
            ->with('success', 'Thêm Nhân Viên Thành Công');
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
        $emp = Employee::find($id);
        return view('backend.admin.employee.edit', compact('emp'));
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
        $emp = Employee::find($id);
        $empName = $request->input('emp_name');
        $empPhone = $request->input('emp_phone');
        $empEmail = $request->input('emp_email');
        $empDuty = $request->input('emp_duty');
        $empSkype = $request->input('emp_skype');
        $empNote = $request->input('emp_note');
        $empIsWork=$request->input('emp_is_work');
        $empOrder=$request->input('emp_order');
        if($empOrder){
            $emp->emp_order = $empOrder;
        }else{
            $emp->emp_order = 1;
        }
        $empImage = $request->input('emp_image');
        $empImage = substr($empImage, strpos($empImage, 'images'), strlen($empImage) - 1);
        $empIsWork=$request->input('emp_is_work');
        if($empIsWork){
            $emp->emp_is_work=1;
        }else{
            $emp->emp_is_work=0;
        }
        $emp->emp_name = $empName;
        $emp->emp_phone = $empPhone;
        $emp->emp_email = $empEmail;
        $emp->emp_skype = $empSkype;
        $emp->emp_duty = $empDuty;
        $emp->emp_note = $empNote;
        $emp->emp_image = $empImage;
        $emp->save();
        return redirect()->route('emp.index')
            ->with('success', 'Cập Nhật Nhân Viên Thành Công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emp = Employee::find($id);
        $emp->delete();
        return redirect()->route('emp.index')
            ->with('success', 'Đã Xóa Nhân Viên');
    }
    public function search(Request $request)
    {
        $keywords = preg_replace('/\s+/', ' ',$request->input('txtSearchEmp'));
        $emps = Employee::where('emp_name', 'like', '%' . $keywords . '%')->orderBy('id', 'DESC')->paginate(5);
        return view('backend.admin.employee.index', compact('emps', 'keywords'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
}