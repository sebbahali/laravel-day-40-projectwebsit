<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stor extends Model
{
    use HasFactory;
    protected $fillable = [
        'filenames'
    ];
  
    public function setFilenamesAttribute($value)
    {
        $this->attributes['filenames'] = json_encode($value);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
