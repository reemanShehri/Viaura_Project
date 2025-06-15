<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Discussion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    //

     use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category_id',
        'video_url',
    ];


    public function category()
{
    return $this->belongsTo(Category::class);
}

public function discussions()
{
    return $this->hasMany(Discussion::class);
}



public function users()
{
    return $this->belongsToMany(User::class);
}



}
