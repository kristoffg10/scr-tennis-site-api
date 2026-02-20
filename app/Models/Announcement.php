<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\{
    UuidTrait,
    GlobalTrait
};

class Announcement extends Model
{
    use HasFactory, SoftDeletes, UuidTrait, GlobalTrait;

    protected $modelName = 'announcement';
    public $timestamps = true;

    protected $guarded = [
        'id'
    ];

    protected $hidden = [
        'deleted_at'
    ];
}
