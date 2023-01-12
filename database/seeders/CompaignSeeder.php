<?php

namespace Database\Seeders;

use App\Models\Campaign;
use Illuminate\Database\Seeder;

class CompaignSeeder extends Seeder
{
    public function run()
    {
        $campaigns = [
            'campaign1',
            'campaign2',
            'campaign3',
            'campaign4',
            'campaign5',
            'campaign6',
        ];

        foreach ($campaigns as $campaign) {
            Campaign::create([
                'title' => $campaign,
            ]);
        }
    }
}
