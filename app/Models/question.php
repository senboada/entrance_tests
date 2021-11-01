<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'sequence',
        'question',
        'help',
        'test_id',
    ];

    public function getAnswerRelation()
    {
        return $this->hasOne(Answer::class);
    }
    
}
