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
        'session_type',
        'student_id',
        'title',
        'date',
        'time',
        'venue_type',
        'venue',
        'examiner1_id',
        'examiner2_id',
        'chairperson_id',
        'proposal_title'
    ];

    public function assessment()
    {
        return $this->hasMany('App\Models\Assessment');
    }

    public function proposal()
    {
        return $this->hasOne('App\Models\Proposal');
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

    public function chairperson()
    {
        return $this->hasOne('App\Models\Examiner', 'id', 'chairperson_id');
    }

    public function creator()
    {
        return $this->hasOne('App\Models\User', 'id', 'created_by');
    }
}
