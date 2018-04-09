<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['nama', 'gambar', 'deskripsi', 'harga', 'id_bank', 'id_category', 'id_type', 'id_holder'];

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'id_bank');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'id_type');
    }

    public function holder()
    {
        return $this->belongsTo(Holder::class, 'id_holder');
    }

    public function document()
    {
        return $this->hasOne('App\Document', 'cards_id');
    }

    public function submissions()
    {
        return $this->hasMany('App\Submission', 'id');
    }

}
