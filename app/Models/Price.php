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
        // 'price_list',
        'price_name',
        'price_sub_name',
        'price_nominal',
        'price_list1',
        'price_list2',
        'price_list3',
        'price_list4',
        'price_list5',
    ];
}