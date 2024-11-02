<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tran extends Model
{
    /** @use HasFactory<\Database\Factories\TranFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'amount',
        'sign'
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    protected function casts(): array
    {
        return [
            'name' => 'string',
            'date' => 'date',
            'amount' => 'decimal:2',
            'sign' => 'boolean'
        ];
    }
}
