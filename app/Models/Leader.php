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
    UuidTrait,
    GlobalTrait
};

class Leader extends Model
{
    use HasFactory, SoftDeletes, UuidTrait, ImageTrait, GlobalTrait;

    protected $guarded = [
        'id'
    ];

    protected $modelName = 'leader';

    protected $hidden = [
        'updated_at',
        'deleted_at'
    ];
}
