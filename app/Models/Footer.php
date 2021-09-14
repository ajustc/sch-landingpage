<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'tb_footer';
    protected $primaryKey = 'footer_id';
    public $timestamps = false;

    protected $fillable = [
        'footer_name',
        'footer_description',
    ];
}