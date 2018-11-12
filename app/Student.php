<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['first_name','last_name','password','email','birth_date','gender'];

    public function getFullNameAttribute(){
        return "{$this->first_name} {$this->last_name}";

    }
}
