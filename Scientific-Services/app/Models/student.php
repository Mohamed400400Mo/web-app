<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    
    protected $fillable =[

        'email' ,  
        'name' , 
        'id' , 
        'password',
        'department',
        'level',
        'gpa', 
        
    ];  

    public function reason()
    {
        return $this->hasMany(ReasonsToGraduate::class,'student_id');
    }


}
