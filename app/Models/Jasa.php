<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    use HasFactory;
    protected $table = "jasa";
    protected $fillable = [
        'name', 'description', 'whatsapp_message', 'image'
    ];
}
