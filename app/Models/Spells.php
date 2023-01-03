<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spells extends Model
{
    protected $fillable = [
        'spell_name','school', 'ritual', 'casting_time', 'range', 'target', 'components', 'concentration', 'duration', 'description', 'at_higher_levels'
      ];
    
    public function Classes()
    {
        return $this->belongsToMany(Classes::class);
      }

    public function Subclasses()
    {
        return $this->belongsToMany(Subclasses::class);
      }
    
    public function Races()
    {
        return $this->belongsToMany(Races::class);
      }

    public function Backgrounds()
    {
        return $this->belongsToMany(Backgrounds::class);
      }

    public function Feats()
    {
        return $this->belongsToMany(Feats::class);
      }
    }
