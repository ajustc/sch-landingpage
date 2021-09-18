<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListBiograpy extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'tb_biograpy_list';
    protected $primaryKey = 'bl_id';
    public $timestamps = false;

    protected $fillable = [
        'bl_title',
        'bl_sub_title',
        'bl_image',
        'bl_list1',
        'bl_list2',
        'bl_list3',
        'bl_list4',
        'bl_desc',

    ];
}