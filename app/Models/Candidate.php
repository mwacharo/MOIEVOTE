<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidate extends Model
{

    use HasFactory;
    protected $fillable = [
        'candidate_name', 'email','group_id','student_number','candidate','image'

    ];

    public function group(){
        return $this->belongsTo(Group::class, 'group_id');
    }

}
