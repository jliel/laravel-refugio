<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
            [
                'title' => 'Image 1',
                'url' => 'https://images.pexels.com/photos/1108099/pexels-photo-1108099.jpeg'
            ],
            [
                'title' => 'Image 2',
                'url' => 'https://images.pexels.com/photos/1633522/pexels-photo-1633522.jpeg'
            ],
            [
                'title' => 'Image 3',
                'url' => 'https://images.pexels.com/photos/333083/pexels-photo-333083.jpeg'
            ]
        ];

        foreach ($sliders as $key => $value) {
            Slider::create($value);
        }
    }
}
