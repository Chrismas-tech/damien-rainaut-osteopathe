<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailScheduler extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function time_in_seconds()
    {
        return $this->belongsTo(TimeInSeconds::class, 'sending_frequency_id');
    }
}
