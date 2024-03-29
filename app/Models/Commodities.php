<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commodities extends Model
{
    use HasFactory;

    protected $table = 'commodities';

    protected $fillable = ['name','description','seller_id','price','minimum_amount','type','exchange_for'];

    /**
     * The users that belong to the role.
     */
    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    /**
     * The commodity belongs to categories
     */
    public function category()
    {
        return $this->belongsTo(SubCategories::class, 'category_id');
    }

    /**
     * Scope a query to only Goods.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeGoods($query)
    {
        return $query->where('type', 'goods');
    }

    /**
     * Scope a query to only Services.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeServices($query)
    {
        return $query->where('type', 'services');
    }
}
