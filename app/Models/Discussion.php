<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    //

    public function course()
{
    return $this->belongsTo(Course::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}

}
