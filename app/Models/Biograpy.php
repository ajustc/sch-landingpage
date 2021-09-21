<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biograpy extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'tb_biograpy';
    protected $primaryKey = 'biograpy_id';
    public $timestamps = false;

    protected $fillable = [
        'biograpy_title',
        'biograpy_sub_title',
        'biograpy_desc',
        'biograpy_desc1',
        'biograpy_use',
    ];
}
