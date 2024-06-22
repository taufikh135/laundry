<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $keyType = 'int';

    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'product_code',
        'name',
        'description',
        'point',
        'price',
    ];

    public function product(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Product::class, 'product_code', 'code');
    }
}
