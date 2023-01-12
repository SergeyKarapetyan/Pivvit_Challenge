<?php

namespace Tests\Feature;

use Tests\TestCase;

class DonationsTest extends TestCase
{
    /** @test */
    public function example_test()
    {
        $response = $this->get('/api/donations');

        $response->assertStatus(200);
    }

    /** @test */
    public function create_donation()
    {
        $response = $this->post('/api/donations', [
            'donor_name' => 'Test Name',
            'campaign_id' => 1,
            'amount' => '200'
        ]);

        $response->assertStatus(200);
    }
}
