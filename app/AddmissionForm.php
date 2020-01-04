<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddmissionForm extends Model
{
    //
    protected $fillable = [
        'userId',
         'surName', 
         'firstName',
         'middleName',
         'email',
         'residArea',
         'phoneNumber',
         'state',
         'jambScore',
         'gender',
         'sponsore',
         'image',
         'status',
    ];
}
