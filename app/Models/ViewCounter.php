<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewCounter extends Model
{
    use HasFactory;
    
    protected $fillable = ['session_id', 'question_id'];
    
    
    public static function viewerControl(Question $question, $sessionId): void
    {
        
        $control = self::where([['question_id', $question->id], ['session_id', $sessionId]])->doesntExist();
        if ($control && $sessionId) {
            self::create([
                'question_id' => $question->id,
                'session_id' => $sessionId
            ]);
            $question->increment('visits', 1);
        }
    }
}
