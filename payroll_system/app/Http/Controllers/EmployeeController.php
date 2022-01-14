<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Roll;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roll = Roll::get();
        $departments = Department::get();
        return view('employee.create', compact('roll', 'departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // $emp = new Employee();
        // $emp-> name = $request->get('name');
        // $emp-> email = $request->get('email');
        // $emp-> address = $request->get('address');
        // $emp-> role_id = $request->get('role_id');
        // $emp-> department_id = $request->get('department_id');
        // $emp->salary = $request->get('salary');
        // dd(request()->all());
        // $emp->save();
        if(Employee::create($data)){
            return redirect()->route('employee.index');
        }
        return redirect()->route('employee.create');
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
        $employee = Employee::find($id);
        $department = Department::get();
        $roll = Roll::get();
        return view('employee.edit', compact('employee', 'department', 'roll'));
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
        $employee = Employee::find($id);
        $employee-> name = $request->get('name');
        $employee-> email = $request->get('email');
        $employee-> address = $request->get('address');
        $employee-> role_id = $request->get('role_id');
        $employee-> department_id = $request->get('department_id');
        $employee->salary = $request->get('salary');
        $employee->save();
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        if(!empty($employee))
            $employee->delete();
        return redirect()->route('employee.index');
    }
}
