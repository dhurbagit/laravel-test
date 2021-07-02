<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_newstudent extends Model
{
    //
    

    protected $fillable =['full_name', 'address','phone_number','email','file_path'];
     
}
