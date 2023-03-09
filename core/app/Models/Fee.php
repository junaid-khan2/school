<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;
    protected $fillable = ['st_id','month','tuition_fee','fine','arrears','old_remming','adm_prom','total','recived','remming','date'];
}
