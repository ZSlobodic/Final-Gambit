<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $table = 'characters';

    protected $primaryKey = 'id';

    protected $fillable = ['character_name', 'class_name', 'SAM'];

    public function characterSpells()
    {
        return $this->hasMany(CharacterSpell::class);
    }
    
    public function spells()
    {
        return $this->belongsToMany(Spell::class, 'character_spell', 'character_id', 'spell_id')->withTimestamps();
    }
    
    
    /*public function Spells(): HasMany{
        return $this->belongsToMany(Spells::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }*/


    
}