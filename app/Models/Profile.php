<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'phone_no',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function admin() {
        return $this->hasOne('App\Models\Admin');
    }

    public function examiner() {
        return $this->hasOne('App\Models\Examiner');
    }

    public function supervisor() {
        return $this->hasOne('App\Models\Supervisor');
    }

    public function student() {
        return $this->hasOne('App\Models\Supervisor');
    }
}
