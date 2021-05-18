<?php

namespace App\Api;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Response;

class ApiResponse
{
    /**
     * @param $error
     * @param $response_code
     * @param $results
     * @return Response
     */
    public function response($error, $response_code, $result)
    {
        $key = ($error) ? 'message' : 'result';

        return response([
            'error' => $error,
            'status' => $response_code,
            'count' => ($error) ? 0 : count($result),
            'response_time' => microtime(true) - LARAVEL_START,
            $key => $result,
        ], $response_code);
    }

    /**
     * @param $data
     * @param $responseCode
     * @return Response
     */
    public function sendResponse($data, $responseCode=200, $th=[])
    {
        $responseStr = "$responseCode";
        $error = $responseStr[0] != 2;
        $key = ($error) ? 'message' : 'result';
        $res = [
            'error' => $error,
            'status' => $responseCode,
            'count' => ($error) ? 0 : count($data),
            'response_time' => microtime(true) - LARAVEL_START,
            $key => $data,
        ];

        return response($res, $responseCode);
    }


}
