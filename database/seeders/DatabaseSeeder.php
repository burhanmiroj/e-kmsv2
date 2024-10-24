<?php

namespace Database\Seeders;

use App\Models\JenisKehilangan;
use Illuminate\Database\Seeder;
use Database\Seeders\AgamaSeeder;
use Database\Factories\UserFactory;
use Database\Seeders\SettingSeeder;
use Database\Seeders\PekerjaanSeeder;
use Database\Seeders\IndoRegionSeeder;
use Database\Seeders\PendidikanSeeder;
use Database\Seeders\StatusKawinSeeder;
use Database\Seeders\KeperluanSkckSeeder;
use Database\Seeders\StatusKeluargaSeeder;
use Database\Seeders\ObjekPengawalanSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // SettingSeeder::class,
            LaravelEntrustSeeder::class,
            IndoRegionSeeder::class,
            AgamaSeeder::class,
            PekerjaanSeeder::class,
            PendidikanSeeder::class,
            StatusKawinSeeder::class,
            SettingSeeder::class
        ]);
    }
}
