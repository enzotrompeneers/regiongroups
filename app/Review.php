<?php

namespace App;

class Review extends Model
{
    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
