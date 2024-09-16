<?php

namespace App\Http\Requests;

use App\Http\DTO\SearchAirportsRequestDTO;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class SearchAirportsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'keyword' => 'required|string|max:255'
        ];
    }

    public function getDto(): SearchAirportsRequestDTO
    {
        $validated = $this->validated();

        return new SearchAirportsRequestDTO(
            keyword: Arr::get($validated, 'keyword')
        );
    }
}
