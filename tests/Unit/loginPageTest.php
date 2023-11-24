<?php

namespace Tests\Unit;

/*use PHPUnit\FrameworkTestCase;*/
use Tests\TestCase;
class LoginPageTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $response=$this->get('/login');
        $response->assertSee('hola mundo');
        $response->assertStatus(200);
    }
}
