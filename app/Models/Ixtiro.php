<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ixtiro extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'categoriy', 'sana', 'name', 'mualliflar_soni', 'mualliflari', 'guvohnoma_raqami', 'file'];
}
