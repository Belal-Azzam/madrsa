<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    protected $fillable = ['first_name','last_name','password','email','birth_date','gender'];

    public function getFullNameAttribute(){
        return "{$this->first_name} {$this->last_name}";

    }
}
