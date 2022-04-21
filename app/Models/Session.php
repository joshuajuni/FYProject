<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Session extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'created_by',
        'student_id',
        'title',
        'date',
        'time',
        'venue_type',
        'venue',
        'examiner1_id',
        'examiner2_id',
        'proposal_title'
    ];

    public function assessment()
    {
        return $this->hasOne('App\Models\Assessment');
    }

    public function student()
    {
        return $this->hasOne('App\Models\Student', 'id', 'student_id');
    }

    public function examiner1()
    {
        return $this->hasOne('App\Models\Examiner', 'id', 'examiner1_id');
    }

    public function examiner2()
    {
        return $this->hasOne('App\Models\Examiner', 'id', 'examiner2_id');
    }

    public function creator()
    {
        return $this->hasOne('App\Models\User', 'id', 'created_by');
    }
}
