<?php

namespace App\Http\Controllers\Fontend;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function EmployeeLogin()
    {
        return view('admin.pages.Employee_login');
    }

public function EmployeeRegestation()
{
    //
    return view('admin.pages.Employee_regestation');


}
public function EmployeeRegestationstore(Request $request)
{
    // dd($request->all());
    Employee::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        // 're_password'=>$request,
        'mobile'=>$request->mobile,
        'gender'=>$request->gender,
    ]);
    return redirect()->back()->with('success', 'Employee regestaion Successfully');

}
public function EmployeeView()
{
    $Employee=Employee::all();
    return view('admin/pages/Employee_list', compact('Employee'));
}
}
