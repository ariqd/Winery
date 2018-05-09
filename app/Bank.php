<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = ['nama', 'gambar', 'deskripsi'];

    public function card()
    {
        return $this->hasMany(Card::class, 'id_bank');
    }
}
