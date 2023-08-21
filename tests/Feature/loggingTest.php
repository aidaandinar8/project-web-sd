<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class loggingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function someFunction()
    {
        // $response = $this->get('/');

        // $response->assertStatus(200);

        Log::info('ini informasi');
        Log::error('ini adalah pesan kesalahan error', ['context' => 'additional data']);
    }

}
