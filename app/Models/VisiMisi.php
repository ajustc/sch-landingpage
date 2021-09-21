<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'tb_visimisi';
    protected $primaryKey = 'visimisi_id';
    public $timestamps = false;

    protected $fillable = [
        'visimisi_title',
        'visimisi_description',
        'visimisi_picture',
        'visimisi_use',
    ];
}
