<?php
use App\Wala;
use App\User;
use App\Guru;
use App\Siswa;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin
        $ketua = factory(User::class)->create([
            'name'     => 'Admin',
            'email'    => 'admin@thoriqbinziyad.com',
            'email_verified_at' => now(),
            'password' => bcrypt('laravel'),
        ]);

        $ketua->assignRole('admin');

        $this->command->info('>_ Here is your admin details to login:');
        $this->command->warn($ketua->email);
        $this->command->warn('Password is "laravel"');

        // Guru
        $guru = factory(User::class)->create([
            'name'     => 'Guru',
            'email'    => 'guru@thoriqbinziyad.com',
            'email_verified_at' => now(),
            'password' => bcrypt('laravel'),
        ]);

        if($guru->save()){

            $guruprofile = Guru::create([
                'user_id'   => $guru->id,
            ]);
        }

        $guru->assignRole('guru');

        $this->command->info('>_ Here is your guru details to login:');
        $this->command->warn($guru->email);
        $this->command->warn('Password is "laravel"');

        // Walas
        $walas = factory(User::class)->create([
            'name'     => 'Walas',
            'email'    => 'walas@thoriqbinziyad.com',
            'email_verified_at' => now(),
            'password' => bcrypt('laravel'),
        ]);

        if($walas->save()){

            $guruprofile = Wala::create([
                'user_id'   => $walas->id,
            ]);
        }
        $walas->assignRole('walas');

        $this->command->info('>_ Here is your walas details to login:');
        $this->command->warn($walas->email);
        $this->command->warn('Password is "laravel"');

        // Siswa
        $siswa = factory(User::class)->create([
            'name'     => 'Siswa',
            'email'    => 'siswa@thoriqbinziyad.com',
            'email_verified_at' => now(),
            'password' => bcrypt('laravel'),
        ]);

        if($siswa->save()){
            $siswaProfile = Siswa::create([
                'user_id'   => $siswa->id,
            ]);
        }
        $siswa->assignRole('siswa');

        $this->command->info('>_ Here is your siswa details to login:');
        $this->command->warn($siswa->email);
        $this->command->warn('Password is "laravel"');

        $this->command->call('cache:clear');
    }
}
