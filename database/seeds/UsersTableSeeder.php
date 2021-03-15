<?php
use App\User;
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
        $ketua = factory(User::class)->create([
            'name'     => 'Guru',
            'email'    => 'guru@thoriqbinziyad.com',
            'email_verified_at' => now(),
            'password' => bcrypt('laravel'),
        ]);

        $ketua->assignRole('guru');

        $this->command->info('>_ Here is your guru details to login:');
        $this->command->warn($ketua->email);
        $this->command->warn('Password is "laravel"');

        // Walas
        $ketua = factory(User::class)->create([
            'name'     => 'Walas',
            'email'    => 'walas@thoriqbinziyad.com',
            'email_verified_at' => now(),
            'password' => bcrypt('laravel'),
        ]);

        $ketua->assignRole('walas');

        $this->command->info('>_ Here is your walas details to login:');
        $this->command->warn($ketua->email);
        $this->command->warn('Password is "laravel"');

        // Siswa
        $ketua = factory(User::class)->create([
            'name'     => 'Siswa',
            'email'    => 'siswa@thoriqbinziyad.com',
            'email_verified_at' => now(),
            'password' => bcrypt('laravel'),
        ]);

        $ketua->assignRole('siswa');

        $this->command->info('>_ Here is your siswa details to login:');
        $this->command->warn($ketua->email);
        $this->command->warn('Password is "laravel"');

        $this->command->call('cache:clear');
    }
}
