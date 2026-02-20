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

class PlanHighlight extends Model
{
    use HasFactory, SoftDeletes, UuidTrait, ImageTrait, GlobalTrait, MetadataTrait, FileTrait;

    protected $guarded = [
        'id'
    ];

   

    protected $modelName = 'plan_highlight';

   
}
