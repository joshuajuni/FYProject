<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'profile_id',
        'type',
        'is_active',
        'supervisor_id'
    ];

    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }

    public function supervisor()
    {
        return $this->belongsTo('App\Models\Supervisor', 'supervisor_id');
    }
}
