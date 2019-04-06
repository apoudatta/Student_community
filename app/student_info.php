<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_info extends Model
{
    protected $fillable = [
        'user_id',
        'dept_id',
        'batch_id',
        'roll',
        'semester',
        'reg_num',
        'blood_group',
        'profile_pic'       
    ];
}
