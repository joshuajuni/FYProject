<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assessment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'student_id',
        'examiner_id',
        'session_id',
        'comments'
    ];

    public function session()
    {
        return $this->belongsTo('App\Models\Session');
    }

    public function examiner()
    {
        return $this->hasOne('App\Models\Examiner', 'id', 'examiner_id');
    }
}
