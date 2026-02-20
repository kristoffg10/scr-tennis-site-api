<?php

namespace App\Models;

use App\Traits\{
    GlobalTrait, 
    ImageTrait, 
    UuidTrait,
    FileTrait
};
use Illuminate\Database\Eloquent\Relations\{
    BelongsTo, 
    BelongsToMany, 
    HasMany, 
    HasOne
};
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{
    Model,
    SoftDeletes
};

class SectionTab extends Model
{
    use HasFactory, UuidTrait, GlobalTrait, ImageTrait, FileTrait, SoftDeletes;

    protected $modelName = 'section_tab';

    public $timestamps = true;

    protected $guarded = [
        'created_at'
    ];
    protected $hidden = [
        'deleted_at',
    ];

    public function files(): HasMany
    {
        return $this->hasMany(File::class, 'parent_id', 'id')
            ->where('model', $this->modelName)
            ->whereNull('deleted_at')
            ->orderBy('sequence');
    }

    // Note: images() relationship is provided by ImageTrait
    // It filters by model='section_tab' automatically

    public function subs(): HasMany
    {
        return $this->hasMany(SectionTab::class, 'parent', 'id');
    }

    public function faqs(): HasMany
    {
        return $this->hasMany(SectionFaq::class, 'parent_id', 'id');
    }

}