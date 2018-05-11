<?php

namespace App;

class Portfolio extends Model
{
    public static function getAll()
    {
        return static::latest()->get();
    }
}
