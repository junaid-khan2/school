<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    use HasFactory;
    protected $fillable = ['st_id','class','roll_no','monthly_fee','reming','advance'];
}
