<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\student;

class IndexController extends Controller
{
    public function index() { 
       
         
      return view('index') ;

    }

    
    public function show($index_id) { 
       
         if ($index_id==1) 
         {
           return view('login.show') ; 
         }
         
         elseif($index_id==2) 
          { 
             
            return view('signup-student.create') ;
          }

          elseif($index_id==3) 
          { 
             
            return view('signup-employee.create') ;
          }
       

    } 
       // signup student
    public function store(Request $request){ 
       
     
    
     
       
      $validatedData = $request->validate([
        'Name' => ['required','min:15','unique:students'],
        'Email' => ['required','min:15','unique:students'],
        'Id' => ['required','min:7','unique:students'],
        'Password' => ['required','min:8'],
        'Department' => ['required', 'regex:/^[A-Z]{2}$/'],
        'Level' => ['required', 'regex:/^\d{1}$/'],
        'GPA' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],

        

      ]);

     
      
      $req =request()->all() ;
      
      
     
     $name= request()->Name ; 
     $email= request()->Email ; 
     $id= request()->Id ; 
     $password= request()->Password ;
     $hashed_pass = password_hash($password, PASSWORD_DEFAULT) ;
     $department = request()->Department ;
     $level= request()->Level ;
     $gpa= request()->GPA ;
     $error_filed = array() ; 
    //  filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z-' ]*$/", $name) &&filter_var($id, FILTER_VALIDATE_INT)
     if (!filter_var($email, FILTER_VALIDATE_EMAIL) ) {
        
         $error_filed[] = 'email' ; 
     } 

      if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) { 
       
        $error_filed[] = 'name' ; 
        
      }

      if(!filter_var($id, FILTER_VALIDATE_INT)) { 
       
        $error_filed[] = 'id' ; 
        
      }
      if(filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z-' ]*$/", $name) &&filter_var($id, FILTER_VALIDATE_INT)) 
     { 
      $student = new student ; 

      $student->name = $name ; 
 
      $student->email = $email ; 
      
      $student->id = $id ;  
 
 
      $student->password =  $hashed_pass ;   

      $student->department = $department ; 

      $student->level = $level ; 

      $student->gpa = $gpa ; 
    
      $student->save() ;
      
      
      return to_route('index.index') ;
       
    
      

  }else {
        
        return view ('signup-student.create', ['error_filed'=>$error_filed] ) ;
        
   }

   
    
  }

  public function create () { 
      
     
    return view('signup-student.create') ;
        
  }    
     


public function graduation_certificate(Request $request){

  $validatedData = $request->validate([
    'photo' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
    'Graduation_Certificate' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
  ]);
  $req =request()->all() ; 
  $id= request()->Id ;
  $student = student::find($id) ;
  $Graduation_Certificate = $request->input('Graduation_Certificate');
  
  $photoPath = $request->file('photo')->storeAs('driver', 'public');
  
  
 // $userId = Auth::id();
//$student = Student::where('Id', $userId)->first();
  $student->photo = $photoPath;
  $student->graduation_certificate = $Graduation_Certificate;
  $student->save();
  
  return view('services.graduationcertificate');
}
  
public function reasons_graduation(Request $request){

  $validatedData = $request->validate([
    'Reasons_Graduation' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
  ]);

  $req =request()->all() ; 
  $id= request()->Id ;
  $student = student::find($id);

 

   $Reasons_Graduate = $request->input('Reasons_Graduation');

  // Update the student's reasons_graduation attribute
   $student->reasons_graduation = $Reasons_Graduate;

  // Save the updated student record to the database
   $saved = $student->save();
  
   if ($saved) {
    // Data saved successfully
    return view('services.reasonstograduate');
   } else {
    return false;
    // Failed to save data
    // You can handle this case as needed, such as showing an error message
    // or redirecting back with a message
   }

}




}

  
      
     
     
      
    
  

  