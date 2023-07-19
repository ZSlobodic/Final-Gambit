<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spells extends Model
{
    protected $fillable = [
        'spell_name','school', 'level', 'ritual', 'casting_time', 'range', 'target', 'somatic', 'vocal', 'material', 'components', 'concentration', 'duration', 'description', 'at_higher_levels', 'type'
      ];
    
    public function Classes(){
        return $this->belongsToMany(Classes::class);
    }

    public function Subclasses(){
        return $this->belongsToMany(Subclasses::class);
    }
    
    public function Races(){
        return $this->belongsToMany(Races::class);
    }

    public function Backgrounds(){
        return $this->belongsToMany(Backgrounds::class);
    }

    public function Feats(){
        return $this->belongsToMany(Feats::class);
    }

    public function characters()
    {
        return $this->belongsToMany(Character::class, 'character_spell', 'spell_id', 'character_id')->withTimestamps();
    }

}
