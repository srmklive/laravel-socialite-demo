<?php

use Illuminate\Database\Seeder;

class SocialNetworksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $networks = ['Facebook', 'Twitter', 'Linkedin', 'Pinterest', 'Youtube'];

        foreach ($networks as $network) {
            factory(\App\SocialNetwork::class)->create(['name' => $network]);
        }
    }
}
