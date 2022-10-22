<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //TODO CODE!
    protected $fillable = ['title', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //END CODE!
}