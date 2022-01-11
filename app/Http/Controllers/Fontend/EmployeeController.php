<?php

namespace App\Http\Controllers\Fontend;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function EmployeeLogin()
    {
        return view('website.pages.Employee_login');
    }

    public function EmployeeRegestation()
    {
        //
        return view('website.pages.Employee_regestation');
    }
    public function EmployeeRegestationstore(Request $request)
    {
        // dd($request->all());
        Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            // 're_password'=>$request,
            'mobile' => $request->mobile,
            'gender' => $request->gender,
        ]);
        return redirect()->route('Employee.login')->with('success', 'Employee regestaion Successfully');
    }
    public function EmployeeView()
    {
        $Employee = Employee::all();
        return view('admin/pages/Employee_list', compact('Employee'));
    }
    public function Employee_single_View($employee_id)
    {
        $employee = employee::find($employee_id);

        return view('admin.pages.employe_single_view', compact('employee'));
    }
}
