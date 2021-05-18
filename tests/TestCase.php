<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use DatabaseTransactions;
    const API_PATH = '/api';
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    protected $standardGetHeaderContent = [
        'count' => 1,
        'status' => 200,
    ];

    protected $standardCreateHeaderContent = [
        'error' => false,
        'count' => 1,
        'status' => 201,
    ];

    // /**
    //  * Creates the application.
    //  *
    //  * @return \Illuminate\Foundation\Application
    //  */
    // public function createApplication()
    // {
    //     $app = require __DIR__.'/../bootstrap/app.php';

    //     $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
    //     \Illuminate\Support\Facades\Hash::setRounds(4);

    //     return $app;
    // }

    /**
     * This method is designed to prevent repititous task
     * of creating the payload response. This builds that from
     * the payload array itself
     *
     * @param array $payload
     * @param array $excludes
     * @return array
     */
    protected function buildResponsePayload($payload, $excludes=null)
    {
        $response = [];

        foreach ($payload as $key=>$value) {
            if ($excludes && !in_array($key, $excludes)) {
                $response[$key] = $value;
            }
        }

        $response = ['result' => $response];

        return $response;
    }


    public function getContent($obj)
    {
        $content = $obj->getContent();

        return json_decode($content)->result;
    }
}
