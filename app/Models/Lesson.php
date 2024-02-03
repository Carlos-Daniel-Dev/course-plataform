<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'title', 'content', 'module_id',
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    // Add any other relationships or methods here
}

