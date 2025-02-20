<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recipes extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'prep_time', 'servings', 'difficulty', 'category_id', 'image'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }

    public function comments()
    {
        return $this->hasMany(Comments::class, 'recipe_id');
    }
}
