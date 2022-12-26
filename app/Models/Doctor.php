<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctors';
    protected $primaryKey = 'id_doctor';
    protected $fillable = ['doctor_name', 'education', 'university', 'specialization', 'doctor_desc', 'doctor_img', 'address', 'phone_num', 'email','password'];
    public function test1()
    {
        return $this->belongsTo(Specialization::class, 'specialization', 'id_specialization');
    }
    public function test2()
    {
        return $this->hasMany(Form::class);
    }

}
