<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
session_start() ; 

class LoginController extends Controller
{
    
   
    public function store(Request $request ) 
      {  
           

          $req =request()->all() ; 

          $id= request()->Id ; 
          $password= request()->Password ; 
          $error_filed = array() ;  
          $data = student::find($id) ;
        if(!filter_var($id, FILTER_VALIDATE_INT) || $data == null  ) { 
       
            $error_filed[] = 'id' ; 

            return view ('login.show',['error_filed'=>$error_filed]);

            
         } 
         
         else  
          {
             $student = student::findOrFail($id);

             if (password_verify($password , $student->password)) {
                    
                  session(['id' => $student->id]);
                  return view ('student-services',['student'=>$student]) ; 

            }else { 
               
              $error_filed[] = 'id' ; 

              return view ('login.show',['error_filed'=>$error_filed]);
               
            }

          }
         

          





          
      }




}