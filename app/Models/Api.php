<?php

namespace App\Models;

use Database\Factories\ApiFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Api extends Model
{
    /**
     * @use HasFactory<ApiFactory>
     */
    use HasFactory;

    protected $table = 'apis';

    protected $fillable = [
        'id',
        'uuid',
        'user_id',
        'name',
        'description',
        'hash',
        'active',
    ];

    protected function casts(): array
    {
        return [
            'active' => 'boolean',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
