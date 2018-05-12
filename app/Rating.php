<?php

namespace App;

class Rating extends Model
{
    public function Portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
