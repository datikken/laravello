<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Board extends Model
{
    public function lists(): HasMany
    {
        $this->hasMany(CardList::class, 'board_id');
    }

    public function owner(): BelongsTo
    {
        $this->belongsTo(User::class, 'owner_id');
    }
}
