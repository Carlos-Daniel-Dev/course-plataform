<?php

// app/Course.php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'instructor_id',
    ];

    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    // Add any other relationships or methods here
}
