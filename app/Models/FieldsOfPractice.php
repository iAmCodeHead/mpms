<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldsOfPractice extends Model
{
    use HasFactory;
    protected $fillable = ['practice_id', 'field_id'];
}
