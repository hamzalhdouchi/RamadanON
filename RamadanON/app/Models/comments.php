<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;

    protected $fillable = ['name_user', 'recipe_id', 'content'];
    public function recipe()
    {
        return $this->belongsTo(Recipe::class, 'recipe_id');
    }


}
