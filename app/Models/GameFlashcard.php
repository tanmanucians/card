<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Flashcard;
use App\Models\Game;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GameFlashcard extends Model
{
    protected $table = 'game_flashcards';
    protected $primaryKey = 'id';
    protected $fillable = [
        'flashcard_id','game_id','created_by','updated_by'
    ];
    protected $casts = [
        'flashcard_id' => 'int',
        'game_id' => 'int',
    ];

    public function flashcards():BelongsTo
    {
        return $this->belongsTo(
            Flashcard::class,
            'flashcard_id',
            'id'
        );
    }

    public function games():HasMany
    {
        return $this->hasMany(
            Game::class,
            'game_id',
            'id'
        );
    }
}
