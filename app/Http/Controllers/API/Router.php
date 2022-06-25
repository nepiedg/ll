<?php
/**
 * @DATE 6.5
 */

namespace App\Http\Controllers\API;

use Illuminate\Routing\Controller as BaseController;

class Router extends BaseController
{
    public function getData()
    {
        return 'get';
    }

    public function post()
    {
        return "post";
    }

    public function getids($ids)
    {
        return $ids;
    }
}
