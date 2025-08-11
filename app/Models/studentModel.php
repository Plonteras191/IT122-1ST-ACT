<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
{
    protected $table = 't_students';
protected $fillable = ['id',
                        'first_name',
                        'last_name',
                        'middle_name',
                        'gender',
                        'dob',
                        'phone_number'];
}
