<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\MethodFactory;

class Method extends Model
{
    /**
     * @use HasFactory<MethodFactory>
     */
    use HasFactory;

    protected $table = 'methods';

    protected $fillable = [
        'id',
        'name',
    ];
}
