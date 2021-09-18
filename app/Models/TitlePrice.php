<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TitlePrice extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'tb_title_price';
    protected $primaryKey = 'tp_id';
    public $timestamps = false;

    protected $fillable = [
        'tp_title',
        'tp_sub_title',

    ];
}