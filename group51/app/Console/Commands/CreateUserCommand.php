<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:newuser {username} {email} {pw}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'make new user ddddd';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $un = $this->secret('what is your pw ?');
        $em = $this->argument('email');
        $pw = $this->argument('pw')  ;

        $user = User::create(
            [
                'name' => $un ? $un : 'notitleuser',
                'email' => $em ? $em : 'defaulr@web.com',
                'password' => $pw ? $pw : 'pass123'
            ]
        );

        if($user) {
            $this->info('user is added suuccesfully');
        }
    }
}
