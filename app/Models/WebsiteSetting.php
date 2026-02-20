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

class WebsiteSetting extends Model
{
    use HasFactory, SoftDeletes, UuidTrait, ImageTrait;

    protected $guarded = [
        'id'
    ];
    
    protected $modelName = 'website_setting';
}
