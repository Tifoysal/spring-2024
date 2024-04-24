<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded=[];

    // protected $fillable=['category_id','name'];

    public function category()
    {

        return $this->belongsTo(Category::class);
        
    }
}
