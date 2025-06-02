<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'message', 'metadata', 'is_read'];

    protected $casts = [
        'metadata' => 'array',
        'is_read' => 'boolean',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
