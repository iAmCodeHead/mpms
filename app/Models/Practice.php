<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Practice
 *
 * @property int                                                                          $id
 * @property string                                                                       $name
 * @property string|null                                                                  $email
 * @property string|null                                                                  $logo
 * @property string|null                                                                  $website_url
 * @property \Illuminate\Support\Carbon|null                                              $created_at
 * @property \Illuminate\Support\Carbon|null                                              $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\FieldsOfPractice[] $fields
 * @property-read int|null                                                                $fields_count
 * @method static \Illuminate\Database\Eloquent\Builder|Practice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Practice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Practice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Practice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Practice whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Practice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Practice whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Practice whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Practice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Practice whereWebsiteUrl($value)
 * @mixin \Eloquent
 */
class Practice extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'logo', 'website_url'];

    public function fields(): HasMany
    {
        return $this->hasMany(FieldsOfPractice::class);
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
