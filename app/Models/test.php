<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Test extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'title',
        'url',
        'type',
        'area_id',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getQuestionsRelation()
    {
        return $this->hasMany(Question::class);
    }

    public function getArea()
    {
        return $this->belongsTo(Area::class,'area_id');
    }
}
