<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected  $fillable = ['full_name','father_name','phone','class','roll_no','monthly_fee','remming','advance','father_cnic','date_of_birth','word_date_of_barth','father_occuption','monthly_income','nationality','religion','last_school','slc_no','last_attended_class','admited_class','home_address','district','tehsil','image'];
}
