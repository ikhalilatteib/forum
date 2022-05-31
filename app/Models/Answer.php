<?php

namespace App\Models;

use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Answer extends Model
{
    use HasFactory;
    use BelongsToUser;
  

    protected $fillable = ['content','is_best','user_id','question_id'];

    public function questions(): BelongsTo
    {
        return $this->belongsTo(Question::class, 'question_id');
    }


}
