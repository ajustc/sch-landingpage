<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Graduet extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'tb_graduet';
    protected $primaryKey = 'graduet_id';
    public $timestamps = false;

    protected $fillable = [
        'graduet_name',
        'graduet_date',
        'graduet_desc',

    ];
}