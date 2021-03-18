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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datatime',
    ];



    public function workshops() {

        return $this->belongsToMany(Workshop::class);
    }
}
