<?php

namespace App\Models;

use App\Traits\FileTrait;
use App\Traits\GlobalTrait;
use App\Traits\ImageTrait;
use App\Traits\MetadataTrait;
use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class PageSection extends Model
{
    use HasFactory, SoftDeletes, UuidTrait, ImageTrait, GlobalTrait, MetadataTrait, FileTrait;

    protected $guarded = [
        'id'
    ];

    protected $hidden = [
        'updated_at',
        'deleted_at'
    ];

    protected $modelName = 'page_section';

    public function buttons(): HasMany
    {
        return $this->hasMany(Button::class, 'parent', 'id');
    }

    public function logs(): HasMany
    {
        return $this->hasMany(Log::class, 'item_id', 'id');
    }

    public function accordions(): HasMany
    {
        return $this->hasMany(Accordion::class, 'parent', 'id');
    }

    public function testimonials(): HasMany
    {
        return $this->hasMany(SectionTestimonial::class, 'parent_id', 'id');
    }

    public function faqs(): HasMany
    {
        return $this->hasMany(SectionFaq::class, 'parent_id', 'id');
    }

    public function cards(): HasMany
    {
        return $this->hasMany(SectionCard::class, 'parent_id', 'id');
    }

    public function tabs(): HasMany
    {
        return $this->hasMany(SectionTab::class, 'parent_id', 'id');
    }

    public function videos(): HasMany
    {
        return $this->hasMany(SectionVideo::class, 'parent_id', 'id');
    }

    public function hotlines(): HasMany
    {
        return $this->hasMany(SectionHotline::class, 'parent_id', 'id');
    }

    public function benefits(): HasMany
    {
        return $this->hasMany(SectionBenefit::class, 'parent_id', 'id');
    }

    public function emails(): HasMany
    {
        return $this->hasMany(SectionEmail::class, 'parent_id', 'id');
    }

    public function socials(): HasMany
    {
        return $this->hasMany(SectionSocial::class, 'parent_id', 'id');
    }

    public function files(): HasMany
    {
        return $this->hasMany(File::class, 'parent_id', 'id');
    }

    


    // Hide empty relations
    public function toArray()
    {
        $array = parent::toArray();
        foreach (['buttons', 'accordions', 'testimonials', 'faqs', 'cards', 'tabs', 'videos', 'hotlines', 'benefits', 'socials', 'emails'] as $relation) {
            if (array_key_exists($relation, $array) && empty($array[$relation])) {
                unset($array[$relation]);
            }
        }
        return $array;
    }

}
