<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories';

    /**
     * Get commodities belonging to category
     */

    public function commodities()
    {
        return $this->belongsToMany(Commodities::class);
    }
}


