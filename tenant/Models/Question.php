<?php

namespace Tenant\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'section_id', 'type', 'meta'
    ];

    /**
     * Section
     */
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}