<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentServicesController extends Controller
{
    //
    public function show($studentservice) { 
       
        if ($studentservice==1) 
        {
          return view('services.reasonstograduate') ; 
        }
        
        elseif($studentservice==4) 
         { 
            
           return view('services.graduationcertificate') ;
         }

         elseif($studentservice==3) 
         { 
            
           return view('signup-employee.create') ;
         }
      
        }
}
