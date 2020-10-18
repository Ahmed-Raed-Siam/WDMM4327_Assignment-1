<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //

    protected $fillable = [
        'FirstName', 'LastName', 'password', 'Extension', 'Email', 'JobTitle'
    ];

    public function office()
    {
        return $this->hasOne('App\Office', 'Office_code', 'Code');
    }

    public function employee()
    {
        return $this->hasOne('App\Employee', 'Reports_to', 'id');
    }

}
