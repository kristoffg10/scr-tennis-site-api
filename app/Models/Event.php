<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\{
    UuidTrait,
    GlobalTrait,
    ImageTrait
};

class Event extends Model
{
    use HasFactory, SoftDeletes, UuidTrait, GlobalTrait, ImageTrait;

    protected $modelName = 'event';
    public $timestamps = true;

    protected $guarded = [
        'id'
    ];

    protected $hidden = [
        'deleted_at'
    ];
}
