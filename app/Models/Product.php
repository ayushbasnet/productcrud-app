<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'newproducts';
    protected $primaryKey = 'id';
    protected $fillable = ['product_name', 'price', 'quantity','description','created_at','updated_at','category_id'];
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    //Product::truncate();
    
}
