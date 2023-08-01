<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserPlan extends Model
{
    use HasFactory;

    protected $table = 'users_plans';

    protected $fillable = [
        'user_id',
        'plan_id',
        'subscribed',
        'post_count',
        'start_date',
        'finish_date',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->select(['id', 'name', 'surname', 'nickname']);
    }

    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class)->select(['id', 'name']);
    }
}
