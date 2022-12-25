<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use HasFactory;
    protected $table = 'specializations';
    protected $primaryKey = 'id_specialization';
    protected $fillable = ['name_specialization'];
    public function doctor()
    {
        return $this->hasMany(Doctor::class);
    }
}
