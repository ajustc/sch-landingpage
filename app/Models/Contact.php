<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'tb_contact';
    protected $primaryKey = 'contact_id';
    public $timestamps = false;

    protected $fillable = [
        'contact_title',
        'contact_sub_title',
        'contact_address',
        'contact_kode_pos',
        'contact_tlpn',
        'contact_email',
        'contact_opening',
        'contact_close',
    ];
}