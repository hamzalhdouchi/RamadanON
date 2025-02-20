<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recipes extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'prep_time', 'servings', 'difficulty', 'category_id', 'image'];
}
