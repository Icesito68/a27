<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Venue extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'date_start',
        'date_end',
        'status',
        'region',
        'conference_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date_start' => 'date',
        'date_end' => 'date',
        'conference_id' => 'integer',
    ];

    public function conference(): BelongsTo
    {
        return $this->belongsTo(Conference::class);
    }
}
