<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Post extends Model
{
    use HasFactory;
    protected $table = 'medicine';
    protected $guarded = 'id';
    protected $fillable = ['toko','harga','nama', 'image', 'deskripsi'];

    public function category(){
        return $this->belongsTo(Category::class);

    }
}
