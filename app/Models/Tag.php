<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function questions(): HasOne
    {
        return $this->hasOne(Question::class);
    }
}
