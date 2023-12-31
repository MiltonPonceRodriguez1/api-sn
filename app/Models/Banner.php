<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'banner',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
