<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $with = ['user'];

    protected $fillable = [
        'title',
        'content',
        'tags',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
