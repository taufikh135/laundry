<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    protected $table = 'social_media';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'name',
        'url',
    ];
}
