<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->hasMany(Category::class, 'quizzes_id');
    }
}
