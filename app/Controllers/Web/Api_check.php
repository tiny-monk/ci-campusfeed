<?php

namespace App\Controllers\Web;

use App\Controllers\BaseController;
use App\Libraries\Web\CampusFeedApiClient;

class Api_check extends BaseController
{
    public function index()
    {
        $apiClient = new CampusFeedApiClient();
        $data['api_status'] = $apiClient->checkApi();
        $data['db_status'] = $apiClient->checkDbConnection();

        return view('api_check_result', $data);
    }
}
