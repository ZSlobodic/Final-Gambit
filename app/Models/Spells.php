<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spells extends Model
{
    protected $fillable = [
        'spell_name','school', 'ritual', 'casting_time', 'range', 'target', 'components', 'concentration', 'duration', 'description', 'at_higher_levels'
      ];
}
