<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    use HasFactory;

    protected $table = 'photos';

    /**
     * The users that belong to the role.
     */
    public function categories()
    {
        return $this->belongsTo(Commodities::class);
    }
}
