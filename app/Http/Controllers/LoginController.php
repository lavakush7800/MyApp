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

    public function store(Request $request) {
        //save data in model
        //redirect to show page
          
     $data=$request->all();

     $data = Model::create($data);
     
    }
    
}
