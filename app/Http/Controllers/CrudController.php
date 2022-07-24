<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    // To show form page 
    public function showForm(){
        return view("crud.form-page");
    }

    // insert form data 

    public function insertForm(Request $request){

        $data=$request->all();
        $validating=Validator::make($data,[
            "name"=>"required|min:3",
            "email"=>"required|unique:cruds",
            "detail"=>"required"
        ]);
      // dd($validating);
        if($validating->fails()){
            return redirect()->back()->withInput()->withErrors($validating);
        }
     $insert=new Crud;
     $insert->name=$request->name;
     $insert->email=$request->email;
     $insert->detail=$request->detail;
     $insert->save();

     return redirect()->back()->with("message","data inserted successfully");
    }

    // To show inserted data 
    public function showListing(){
        $showData=Crud::all();
        return view("crud.show-form-data",["showData"=>$showData]);
    } 

    //delete data 
    public function deleteData($id){
      $deleting=Crud::find($id)->delete();
      return redirect()->back()->with("delete-message","data deleted successfully");
    }

    // edit page 
    public function editForm($id){
        $data=Crud::find($id);
        return view("crud.edit-page",["data"=>$data]);
    }

    public function updateData(Request $request){
     
       
        $validating=Validator::make($request->all(),[
            "name"=>"required|min:3",
            "email"=>"required|unique:cruds",
            "detail"=>"required"
        ]);
      // dd($validating);
        if($validating->fails()){
            return redirect()->back()->withInput()->withErrors($validating);
        }
       
        $id=$request->get('id');
        
     $insert=Crud::find($id);
     
     $insert->name=$request->name;
     $insert->email=$request->email;
     $insert->detail=$request->detail;
     
     $insert->update();

     return redirect()->back()->with("update-message","data updated successfully");
    }
}
