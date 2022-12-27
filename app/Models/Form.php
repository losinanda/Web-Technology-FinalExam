<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $table = 'forms';
    protected $primaryKey = 'id_form';
    protected $fillable = ['form_name', 'doctor', 'form_phonenum', 'address', 'form_date', 'form_time', 'form_desc','doctor_note','accept'];
    public function test3()
    {
        return $this->belongsTo(Doctor::class, 'doctor', 'id_doctor');
    }
    // public function form()
    // {
    //     return $this->hasMany(Doctor::class);
    // }
}
