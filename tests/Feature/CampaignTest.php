<?php

namespace Tests\Feature;

use Tests\TestCase;

class CampaignTest extends TestCase
{
    /** @test */
    public function get_campaigns_list()
    {
        $response = $this->get('/api/campaigns');

        $response->assertStatus(200);
    }
}
