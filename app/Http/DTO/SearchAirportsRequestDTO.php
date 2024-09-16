<?php

namespace App\Http\DTO;

final class SearchAirportsRequestDTO
{
    public function __construct(
        public string $keyword
    ){
    }
}
