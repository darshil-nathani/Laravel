<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\myblog;

class myblogSeeder extends Seeder
{

    public function run(): void
    {
        myblog::create([
            'title' => 'this is laravel',
            'subtitle' => 'laravel',
            'body_content' => 'this is a laravel demo'
        ]);
    }
}
