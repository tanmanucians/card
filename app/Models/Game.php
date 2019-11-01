<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Game extends Model
{
    protected $table = 'games';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name','created_by','updated_by'
    ];
    protected $casts = [
        'name' => 'string'
    ];
}
