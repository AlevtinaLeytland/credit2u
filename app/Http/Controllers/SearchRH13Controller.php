<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class SearchRH13Controller extends BaseController
{

    public function index_search_results_header13(){
        return view('index-search-results-header13');

    }
}
