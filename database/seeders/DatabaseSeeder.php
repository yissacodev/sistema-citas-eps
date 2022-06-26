<?php

namespace Database\Seeders;

use App\Models\MedicalArea;
use App\Models\Municipality;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('appointments');
        Storage::makeDirectory('appointments');

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(MunicipalitySeeder::class);
        $this->call(IdTypeSeeder::class);
        $this->call(MedicalAreaSeeder::class);
        $this->call(BranchOfficeSeeder::class);
        $this->call(PatientSeeder::class);
        User::factory(10)->create();
    }
}
