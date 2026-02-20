<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\{
    HasMany
};
use App\Traits\{
    ImageTrait,
    UuidTrait
};

class Taxonomy extends Model
{
    use HasFactory, SoftDeletes, UuidTrait, ImageTrait;

    protected $guarded = [
        'id'
    ];

    protected $modelName = 'taxonomy';

    protected $fillable = [
        'name',
        'type',
        'email_recipients'
    ];

    protected $casts = [
        'email_recipients' => 'array',
    ];

    const TYPE_ARTICLE_CATEGORY = 'article_category';
    const TYPE_SUBMISSION_TYPE = 'submission_type';

    public function scopeArticleCategories($query)
    {
        return $query->where('type', self::TYPE_ARTICLE_CATEGORY);
    }

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class, 'category_id', 'id');
    }
}
