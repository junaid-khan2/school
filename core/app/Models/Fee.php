<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;
    protected $fillable = ['st_id','month','tuition_fee','fine','arrears','adm_prom','total','recived','reming','date'];
}
