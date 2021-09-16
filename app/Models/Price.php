<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'tb_price';
    protected $primaryKey = 'price_id';
    public $timestamps = false;

    protected $fillable = [
        'price_title',
        'price_desc',
        'price_name',
        'price_nominal',
    ];
}