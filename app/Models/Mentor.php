<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'position_id', 'program_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function daily_logs()
    {
        return $this->hasMany(DailyLog::class);
    }

    public function monthly_logs()
    {
        return $this->hasMany(MonthlyLog::class);
    }

    
}
