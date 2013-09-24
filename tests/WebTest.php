<?php

use Igorw\CgiHttpKernel\CgiHttpKernel;
use Symfony\Component\HttpKernel\Client;

class WebTest extends PHPUnit_Framework_TestCase
{
    private $kernel;
    private $client;

    function setUp()
    {
        $this->kernel = new CgiHttpKernel(realpath(__DIR__.'/../public'));
        $this->client = new Client($this->kernel);
    }

    function testIndex()
    {
        $crawler = $this->client->request('GET', '/index.php');
        $response = $this->client->getResponse();

        $this->assertSame(200, $response->getStatusCode());
        $this->assertContains('True North PHP Conference', $response->getContent());
    }
}
