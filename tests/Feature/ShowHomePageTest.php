<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowHomePageTest extends TestCase
{
    /** @test */
    public function ShowHomePageRendered()
    {
        $response = $this->get('/'); //halaman root

        $response->assertStatus(200); //expeted
    }

    /** @test */
    public function ShowEventPageRendered()
    {
        //mengunjungi halaman event
        $response = $this->get('/event-sekolah'); //halaman root

        //kita akan mendapatkan renpose 200
        $response->assertStatus(200); //expeted

        //kita akan mendapatkan tulisan event
        $response->assertStatus('Event'); //expeted
    }
}
