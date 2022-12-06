<?php

namespace Database\Seeders;

use App\Models\Features;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    public function run()
    {
        $allPlane =
            [
                [
                    "price" => 0,
                    "features" => [
                        "f1" => "Post 1 job for 15 days",
                        "f2" => "Your post will be dispear in 5 days",
                        "f3" => "Duration 1 months",
                        "f4" => "Free 1 moths"
                    ],
                    "plane_type" => "Trailer",
                    "description" => "Best option for your testing our application",
                ],
                [
                    "price" => 50,
                    "features" => [
                        "f1" => "Post 1 job for 5 days",
                        "f2" => "Your post will be dispear in 4 months",
                        "f3" => "Duration 4 months",
                        "f4" => "Free 1 moths"
                    ],
                    "plane_type" => "Silver",
                    "description" => "Best option for not urgent hiring employees",
                ],
                [
                    "price" => 100,
                    "features" => [
                        "f1" => "Post 1 job for 2 days",
                        "f2" => "Your post will be dispear in 8 months",
                        "f3" => "Duration 8 months",
                        "f4" => "Free 2 moths"
                    ],
                    "plane_type" => "Gold",
                    "description" => "Best option for urgent hiring employees",
                ],
                [
                    "price" => 150,
                    "features" => [
                        "f1" => "Unlimited post for 30 days",
                        "f2" => "Your post will be dispear in 9 months",
                        "f3" => "Duration 10 months",
                        "f4" => "Free 4 moths"
                    ],
                    "plane_type" => "Diamond",
                    "description" => "Best option for urgent hiring employees",
                ]
            ];

        // foreach ($allPlane as $i => $i_value) {
        //         $feature = new Features();
        //         $feature->name = $i_value['plane_type'];
        //         $feature->price = $i_value['price'];
        //         $feature->features = ($i_value['features']);
        //         $feature->save();
        // }

    }
}
