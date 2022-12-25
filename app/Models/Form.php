<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $table = 'forms';
    protected $primaryKey = 'id_form';
    protected $fillable = ['form_name', 'form_phonenum', 'form_address', 'form_date', 'form_time', 'form_desc','doctor_note','accept'];
    public function belongs_to_doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor', 'id_doctor');
    }
    // public function form()
    // {
    //     return $this->hasMany(Doctor::class);
    // }
}
