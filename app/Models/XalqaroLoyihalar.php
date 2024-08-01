<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XalqaroLoyihalar extends Model
{
    use HasFactory;


    protected $fillable = ['user_id', 'loyih_name', 'loyiha_raqami', 'start_date', 'end_date', 'lavozimi', 'start_user_date', 'end_user_date', 'file', 'categoriy'];
}
