<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

/**
 * @property string $code
 * @property string $city_name_en
 * @property string|null $city_name_ru
 * @property string|null $country
 *
 */
class Airport extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'code',
        'city_name_en',
        'city_name_ru',
        'country'
    ];

    public function searchableAs(): string
    {
        return 'airports';
    }

    public function toSearchableArray(): array
    {
        return [
            'code' => $this->code,
            'city_name_en' => $this->city_name_en,
            'city_name_ru' => $this->city_name_ru,
            'country' => $this->country
        ];
    }
}
