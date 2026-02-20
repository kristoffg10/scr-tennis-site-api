<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\{
    BelongsTo
};
use App\Traits\{


    UuidTrait,

};

class Video extends Model
{
    use HasFactory, SoftDeletes, UuidTrait;

    protected $modelName = 'video';

    public $timestamps = true;
   

    protected $guarded = [
        'id'
    ];

    protected $hidden = [
        'deleted_at'
    ];

    protected $appends = [
        'content_type'
    ];

    public function getDateAttribute()
    {
        return $this->yt_published_date;
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Taxonomy::class, 'category_id', 'id');
    }

    public function getContentTypeAttribute()
    {
        return 'video';
    }

    
}
