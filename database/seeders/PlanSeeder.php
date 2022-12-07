<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use LucasDotVin\Soulbscription\Enums\PeriodicityType;
use LucasDotVin\Soulbscription\Models\Plan;
use LucasDotVin\Soulbscription\Models\Feature;

class PlanSeeder extends Seeder
{
    public function run()
    {
        $trail = Plan::create([
            'name'             => 'trail',
            'periodicity_type' => PeriodicityType::Month,
            'periodicity'      => 1,
        ]);

        $silver = Plan::create([
            'name'             => 'silver',
            'periodicity_type' => PeriodicityType::Month,
            'periodicity'      => 1,
        ]);

        $gold = Plan::create([
            'name'             => 'gold',
            'periodicity_type' => PeriodicityType::Month,
            'periodicity'      => 3,
            'grace_days'       => 7,
        ]);

        $diamond = Plan::create([
            'name'             => 'diamond',
            'periodicity_type' => PeriodicityType::Month,
            'periodicity'      => 5,
            'grace_days'       => 7,
        ]);



        
        
        $deployMinutes = Feature::whereName('deploy-minutes')->first();
        $subdomains    = Feature::whereName('subdomains')->first();

        $silver->features()->attach($deployMinutes, ['charges' => 15]);

        $gold->features()->attach($deployMinutes, ['charges' => 25]);
        $gold->features()->attach($subdomains);
    }
}