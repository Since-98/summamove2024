<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestatie extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prestatie';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['gebruiker_id', 'oefeningen_id', 'score', 'datum'];

    /**
     * Get the gebruiker that owns the prestatie.
     */
    public function gebruiker()
    {
        return $this->belongsTo(Gebruiker::class);
    }

    /**
     * Get the oefeningen that belongs to the prestatie.
     */
    public function oefeningen()
    {
        return $this->belongsTo(Oefening::class);
    }
}
