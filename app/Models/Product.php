<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'jenis_id',
        'name',
        'price',
        'image',
    ];

    public function jenis(): BelongsTo
    {
        return $this->belongsTo(Jenis::class, 'jenis_id', 'id');
    }
}
