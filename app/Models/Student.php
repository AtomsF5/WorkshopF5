<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'date_born',
        'sex',
        'email',
        'phone',
        'city',
        'how_did_we_meet'
    ];

    public function workshops() {

        return $this->belongsToMany(Workshop::class);
    }
}
