<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = ['nama', 'email', 'alamat', 'notelp', 'tinggal', 'tgl_lahir', 'penghasilan', 'pekerjaan', 'owned',
        'approved', 'id_card'];

    public function card()
    {
        return $this->belongsTo(Card::class, 'id_card');
    }

//    public function submitter_age() {
//        return $this->tgl_lahir->diffInYears(Carbon::now());
//    }
}
