<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchAirportsRequest;
use App\Models\Airport;

class AirportsController extends Controller
{
    public function search(SearchAirportsRequest $searchAirportsRequest)
    {
        $search_result = Airport::search($searchAirportsRequest->getDto()->keyword)->paginateRaw(10);

        return response()->json($search_result);
    }
}
