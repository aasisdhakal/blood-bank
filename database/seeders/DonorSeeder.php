<?php

namespace Database\Seeders;

use App\Models\Donor;
use Illuminate\Database\Seeder;
use Faker\Factory;


class DonorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bar = $this->command->getOutput()->createProgressBar(10);
        $this->command->info('Seeding Donor...');
        Donor::factory()->count(20)->create()->each(function () use ($bar) {
            $bar->advance();
        });
        $bar->finish();
        $this->command->info('      Donor Seeded!');    }
}
