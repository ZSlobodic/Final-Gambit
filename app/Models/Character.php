<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Spell;

class Character extends Model
{
    use HasFactory;

    protected $table = 'characters';

    protected $primaryKey = 'id';

    protected $fillable = ['character_name', 'class_id', 'SAM'];

    public function characterSpells()
    {
        return $this->hasMany(CharacterSpell::class);
    }
    
    public function spells()
    {
        return $this->belongsToMany(Spell::class)->withTimestamps();
    }

    public function characterClass()
    {
        return $this->belongsToMany(Spell::class)->withTimestamps();
    }

    
    
    /*public function Spells(): HasMany{
        return $this->belongsToMany(Spells::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }*/


    
}
