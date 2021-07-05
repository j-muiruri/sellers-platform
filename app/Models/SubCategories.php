<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    use HasFactory;

    protected $table = 'sub_categories';

    protected $fillable = ['name', 'category_id'];

    /**
     * Show main categories
     */
    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    /**
     * Get categories belonging to commodities
     * 
     */

    public function commodities()
    {
        return $this->hasMany(Commodities::class);
    }
}
