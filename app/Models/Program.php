<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'start_date', 'end_date', 'publish'];

    public function mentor()
    {
        return $this->hasMany(Mentor::class);
    }

    public function getGetEndDateAttribute()
    {
        return date('d F Y', strtotime($this->end_date));
    }

    public function getGetStartDateAttribute()
    {
        return date('d F Y', strtotime($this->start_date));
    }

    public function getDate($date)
    {
        return date('d F Y', strtotime($date));
    }
}
