<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'date_born',
        'gender',
        'email',
        'phone',
        'city',
        'how_did_you_get_to_know_us'
    ];

    public function workshops() {

        return $this->belongsToMany(Workshop::class);
    }
}
