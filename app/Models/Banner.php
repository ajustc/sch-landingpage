<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Banner extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'tb_banner';
    protected $primaryKey = 'banner_id';
    public $timestamps = false;

    protected $fillable = [
        'banner_title',
        'banner_description',
        'banner_picture',
        'banner_use',
    ];
}
