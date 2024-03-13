<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {name} {email} {--admin : Create admin user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $email = $this->argument('email');
        // $pwd = $this->argument('pwd');
        $admin = $this->option('admin');

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt('0123456789'); // You can generate a random password here
        // $user->save();

        if ($admin) {
            $user->role = 'admin';
            $user->save();
            $this->info('User created as admin');
        } else {
            $user->role = 'accueil';
            $user->save();
            $this->info('User created');
        }
    }
}
