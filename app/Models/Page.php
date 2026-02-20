<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\{
    MetadataTrait,
    ImageTrait,
    GlobalTrait,
    UuidTrait
};
use Illuminate\Database\Eloquent\Relations\{
    BelongsTo,
    BelongsToMany,
    HasMany,
    HasOne
};

use App\Services\Page\PageBannerService;

class Page extends Model
{
    use HasFactory, SoftDeletes, UuidTrait, ImageTrait, GlobalTrait, MetadataTrait;

    protected $guarded = [
        'id'
    ];

    protected $hidden = [
        'updated_at',
        'deleted_at'
    ];

    protected $modelName = 'page';

    public function page_sections(): HasMany
    {
        return $this->hasMany(PageSection::class, 'page_id', 'id');
    }
}
