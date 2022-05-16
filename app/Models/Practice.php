<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Practice extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'logo', 'website_url'];

    public function fields():HasMany{
        return $this->hasMany(FieldsOfPractice::class);
    }
}
