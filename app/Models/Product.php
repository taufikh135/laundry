<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'code';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'code',
        'type_code',
        'name',
        'image_path',
        'status'
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class, 'type_code', 'code');
    }

    public function services(): HasMany
    {
        return $this->hasMany(Service::class, 'product_code', 'code');
    }
}
