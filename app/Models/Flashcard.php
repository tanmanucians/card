<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flashcard extends Model
{
    protected $table = 'flashcards';
    protected $primaryKey = 'id';
    protected $fillable = [
        'type_id', 'word', 'upload_path', 'created_by', 'updated_by'
    ];
    protected $casts = [
        'type_id' => 'tinyint',
        'word' => 'text',
        'upload_path' => 'text'
    ];

}
