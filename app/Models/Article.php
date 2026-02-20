<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\{
    BelongsTo,
    HasOne
};
use App\Models\Video;
use App\Traits\{
    MetadataTrait,
    ImageTrait,
    UuidTrait,
    GlobalTrait
};
use Attribute;

class Article extends Model
{
    use HasFactory, SoftDeletes, UuidTrait, ImageTrait, MetadataTrait, GlobalTrait;

    protected $modelName = 'article';
    public $timestamps = true;
   

    protected $guarded = [
        'id'
    ];

    protected $hidden = [
        'deleted_at'
    ];

    protected $appends = [
        'first_paragraph',
        'content_type'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Taxonomy::class, 'category_id', 'id');
    }

    public function video(): HasOne
    {
        return $this->hasOne(Video::class, 'article_id', 'id');
    }

    public function getContentTypeAttribute()
    {
        return 'article';
    }

    public function getFirstParagraphAttribute()
    {
        if (empty(trim($this->content))) {
            return null;
        }

        libxml_use_internal_errors(true);

        $doc = new \DOMDocument();
        $doc->loadHTML(mb_convert_encoding($this->content, 'HTML-ENTITIES', 'UTF-8'));

        $paragraphs = $doc->getElementsByTagName('p');
        if ($paragraphs->length > 0) {
            $paragraph = $doc->saveHTML($paragraphs->item(0));
            return strip_tags($paragraph);
        }

        return null;
    }
}
