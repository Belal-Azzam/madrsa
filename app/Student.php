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

    const GENDER_TYPE_MALE = 1;
    const GENDER_TYPE_FEMALE = 2;

    var $genders = [
        SELF::GENDER_TYPE_FEMALE => 'Female',
        SELF::GENDER_TYPE_MALE => 'Male'
    ];

    public function getGenderNameAttribute()
    {
        return $this->genders[$this->gender];
    }

    public function getIdNameAttribute()
    {
        return $this->full_name.' - '.'#'.$this->id;
    }
}
