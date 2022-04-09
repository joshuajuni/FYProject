<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supervisor extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'profile_id',
        'is_active',
    ];

    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }

    public function students()
    {
        return $this->hasMany('App\Models\Student', 'supervisor_id');
    }
}
