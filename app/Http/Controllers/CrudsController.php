<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Auth;
class CrudsController extends Controller
{
     /** 
     * Display a listing of the resource. 
     * 
     * @return \Illuminate\Http\Response 
     */  
    public function index()  
    {  
        $cruds = Crud::all();  
        return view('index', compact('cruds'));    
    } 
  
    /** 
     * Show the form for creating a new resource. 
     * 
     * @return \Illuminate\Http\Response 
     */  
    public function create()  
    {  
        //  
        return view('create');
    }  
  
    /** 
     * Store a newly created resource in storage. 
     * 
     * @param  \Illuminate\Http\Request  $request 
     * @return \Illuminate\Http\Response 
     */  
    public function store(Request $request)  
   
    {  
        $request->validate([  
            'first_name'=>'required',  
            'last_name'=>'required',  
            'gender'=>'required',  
            'age'=>'required',  
            'yob'=>'required',  
            'father_name'=>'required',  
            'roll_no'=>'required',
            'city'=>'required',
            'state'=>'required'  
        ]);  
  
        $crud = new Crud;  
        $crud->first_name =  ($request->first_name);  
        $crud->last_name = ($request->last_name);  
        $crud->gender = ($request->gender);  
        $crud->age = ($request->age);  
        $crud->yob = ($request->yob);  
        $crud->father_name = ($request->father_name);  
        $crud->roll_no = ($request->roll_no);  
        $crud->city = ($request->city);  
        $crud->state = ($request->state);  
        $crud->save();  

        return redirect('crud');
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
        // <!-- dd($id); -->
        //  
     $crud= Crud::find($id);  
     return view('edit', compact('crud'));  
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
        // dd($request);
        //  
        $request->validate([  
            'first_name'=>'required',  
            'last_name'=>'required',  
            'gender'=>'required',  
            'age'=>'required',  
            'yob'=>'required',  
            'father_name'=>'required',  
            'roll_no'=>'required',  
            'city'=>'required',
            'state'=>'required'  
        ]);  
        
        $crud = Crud::find($id);  
        $crud->first_name =  ($request->first_name);  
        $crud->last_name = ($request->last_name);  
        $crud->gender = ($request->gender);  
        $crud->age = ($request->age);  
        $crud->yob = ($request->yob);  
        $crud->father_name = ($request->father_name);  
        $crud->roll_no = ($request->roll_no);  
        $crud->city = ($request->city);  
        $crud->state = ($request->state);  
        $crud->save(); 
        return redirect('crud');
    }    
  
    /** 
     * Remove the specified resource from storage. 
     * 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */  
    public function destroy($id)  
    {  
        $crud=Crud::find($id);  
        $crud->delete(); 
        return redirect('crud'); 
    }    
}
