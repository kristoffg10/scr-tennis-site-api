<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\{
    HasMany
};
use App\Traits\{
    MetadataTrait,
    ImageTrait,
    UuidTrait,
    GlobalTrait
};

class Career extends Model
{
    use HasFactory, SoftDeletes, UuidTrait, ImageTrait, MetadataTrait, GlobalTrait;

    protected $guarded = [
        'id'
    ];
    protected $modelName = 'career';

     protected $hidden = [
        'deleted_at'
    ];
}
