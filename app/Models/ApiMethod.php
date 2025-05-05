<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Database\Factories\ApiMethodFactory;

class ApiMethod extends Model
{
    /**
     * @use HasFactory<ApiMethodFactory>
     */
    use HasFactory;

    protected $table = 'api_methods';

    protected $fillable = [
        'id',
        'uuid',
        'api_id',
        'method_id',
        'output',
    ];

    public function api(): BelongsTo
    {
        return $this->belongsTo(Api::class);
    }

    public function method(): BelongsTo
    {
        return $this->belongsTo(Method::class);
    }
}
