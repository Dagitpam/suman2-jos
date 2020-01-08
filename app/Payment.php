<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
         'surName', 
         'firstName',
         'middleName',
         'email',
         'course',
         'paymentId',
         'paymentStatus',
         'amount',
         'paymentDate',
    ];
}
