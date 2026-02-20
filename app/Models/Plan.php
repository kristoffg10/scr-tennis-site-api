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

class Plan extends Model
{
    use HasFactory, SoftDeletes, UuidTrait, ImageTrait, GlobalTrait, MetadataTrait, FileTrait;

    protected $guarded = [
        'id'
    ];

    protected $hidden = [
        'deleted_at'
    ];

    protected $appends = ['upgrade_badge_content'];

    protected $modelName = 'plan';

    public function availments(): HasMany
    {
        return $this->hasMany(PlanAvailment::class, 'plan_id', 'id');
    }

    public function faqs(): HasMany
    {
        return $this->hasMany(PlanFaq::class, 'plan_id', 'id');
    }

    public function highlights(): HasMany
    {
        return $this->hasMany(PlanHighlight::class, 'plan_id', 'id');
    }

    public function riders(): HasMany
    {
        return $this->hasMany(PlanRider::class, 'plan_id', 'id');
    }

    public function getUpgradeBadgeContentAttribute()
    {
    return $this->upgrade_badge == 1
        ? 'Upgrade with Group Health!'
        : null;
    }
}
