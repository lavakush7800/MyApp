<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login as Model;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function index()  
    {  
      return view('login');
    } 
    public function create(){
          
     }

     ///////////////insert

    public function store(Request $request) {
  
     $data=$request->all();

     $data = Model::create($data);
     
    }

    ///////////////////show data

    public function show(){
      $data = Model::all();

      return view('logshow', compact('data'));
    }



    ///////////////////update

    public function update(Request $request){
      $id=$request->input('id');
      $data=Model::where('id',$id)->select('id','name','email','password')->get();
      return view('editlogin',compact('data'));
    }

    public function edit(Request $request){
      $id= $request->input('id');

      $data=[
          'name'=>$request->name,
          'email'=>$request->email,
          'password'=>$request->password,
      ];
             $data= Model::where('id', $id)->update($data);
      
          return redirect('logshow'); 
    }


    /////////////////////////dalete

    public function delete(Request $request){
      $id=$request->input('id');
        $data= Model::find($id)->delete();
    
   return redirect('logshow'); 
       
   }
    
}
