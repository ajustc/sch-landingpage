<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'tb_activity';
    protected $primaryKey = 'activity_id';
    public $timestamps = false;

    protected $fillable = [
        'activity_image',
        'created_at',
        'updated_at',
    ];
}