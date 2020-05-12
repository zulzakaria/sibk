<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name','nuptk','sex','placeBirth','dateBirth','nik','nip',
        'employStatus','employType','religion','street','rt','rw','subVillage',
        'village','district','postalCode','phone','handphone','email','photo','status'
    ];
}
