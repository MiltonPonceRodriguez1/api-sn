<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaidPost extends Model
{
    use HasFactory;

    protected $table = 'paid_posts';

    protected $fillable = [
        'user_id',
        'user_plan_id',
        'title',
        'description',
        'category',
        'images',
    ];

    public function userPlan(): BelongsTo
    {
        return $this->belongsTo(UserPlan::class);
    }
}
