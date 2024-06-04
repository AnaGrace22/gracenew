<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employeemodel;

class employeecontroller extends Controller
{
 
    public function index()
    {
       return view('employee.index');
    }
   
    public function store(Request $request)
    {
       $employees = [
           'name' => $request->input('name'),
           'email' => $request->input('email'),
           'password' => $request->input('password'),
           'conpass' => $request->input('conpass'),

        
       ];
   
       employeemodel::create($employees);   
       return redirect('employee');
    }
    public function show(){
        $employees = employeemodel::get();
        return view('employee.show', compact('employees'));
    }


    public function edit(int $id){
        $editemp = employeemodel::find($id);
       ;
        return view('employee.edit' , compact('editemp'));
    }
    public function update(Request $request,int $id){
        employeemodel::find($id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'conpass'=>$request->conpass,
   
           
           ]);
            return redirect()->back();

    }
}
