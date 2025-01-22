<?php

namespace App\Jobs;

use App\Models\User;
use Faker\Factory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class UserDataJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        $faker = Factory::create();
        $jumlahData = 500000;
        for ($i = 0; $i < $jumlahData; $i++) {
            $data = [
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => $faker->password,
            ];
            User::create($data);
        }
    }
}
