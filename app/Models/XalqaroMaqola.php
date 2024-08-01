<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XalqaroMaqola extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','categoriy', 'title', 'ishtirokchilar', 'jurnal', 'link', 'yil', 'file'];
}
