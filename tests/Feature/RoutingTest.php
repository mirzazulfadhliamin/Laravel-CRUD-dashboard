<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingTest extends TestCase
{
    public function testGet(){
       $this->get('/home')
            ->assertStatus('Home')
            ->assertSeeText("halo bang")
            ;
            
            

    }
}
