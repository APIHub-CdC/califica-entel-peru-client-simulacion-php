<?php

namespace calificaentel\simulacion\pe\Client;

use \GuzzleHttp\Client;
use \GuzzleHttp\Event\Emitter;
use \GuzzleHttp\Middleware;
use \GuzzleHttp\HandlerStack as handlerStack;

use \calificaentel\simulacion\pe\Client\Configuration;
use \calificaentel\simulacion\pe\Client\ApiException;
use \calificaentel\simulacion\pe\Client\ObjectSerializer;
use \calificaentel\simulacion\pe\Client\Model\Peticion;


class EntelRuc20ApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp()
    {
        $handler = \GuzzleHttp\HandlerStack::create();
        $config = new Configuration();
        $config->setHost('the_url');
        $this->x_api_key = "your_x_api_key";
        $client = new \GuzzleHttp\Client(['handler' => $handler, 'verify' => false]);
        $this->apiInstance = new \calificaentel\simulacion\pe\Client\Api\EntelRuc20Api($client, $config);
    }
    
    public function testEntelRuc20()
    {
        $request = new Peticion();

        $request->setFolio("");
        $request->setTipoDocumento("10");
        $request->setNumeroDocumento("20100072590");
        $request->setIdUsuario("946513634");
        $request->setIdTipoOperacion("PPR");

        try{
            $result = $this->apiInstance->entelRuc20($this->x_api_key, $request);
            print_r($result);
        }catch(Exception $e){
            echo 'Exception when calling EntelRuc20Api->Api: ', $e->getMessage(), PHP_EOL;
        }
    }
}
