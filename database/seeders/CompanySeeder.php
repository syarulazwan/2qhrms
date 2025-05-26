<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\CompanyAttachment;

class CompanySeeder extends Seeder
{
    public function run()
    {
        Company::factory()
            ->count(15)
            ->create()
            ->each(function ($company) {
                $company->attachments()->create([
                    'logo' => fake()->word() . '.png',
                ]);
            });
    }
}
