<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListVisiMisi extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'tb_visimisi_list';
    protected $primaryKey = 'visimisi_list_id';
    public $timestamps = false;

    protected $fillable = [
        'visimisi_list_title',
        'visimisi_list_description',
    ];
}
