<?php

namespace App\Models;

use App\Models\Job;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    //


    use HasFactory;

    protected $fillable = ['name'];


    public function courses()
{
    return $this->hasMany(Course::class);
}

public function jobs()
{
    return $this->hasMany(Job::class);
}

}
