<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorys';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['category_name', 'description'];
    
    use HasFactory;
    public function product()
    {
        return $this->hasMany(Product::class, 'id');
    }
    
}
