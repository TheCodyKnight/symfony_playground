<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HelloControllerTest extends WebTestCase
{
    private KernelBrowser $client;

    protected function setUp(): void
    {
        $this->client = static::createClient();
    }

    public function testHelloRouteStatusOk(): void
    {
        $this->client->request('GET', '/hello');
        $this->assertResponseIsSuccessful();
        $this->assertStringContainsString('Hallo Welt', $this->client->getResponse()->getContent());
    }
}
