<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Spatie\Permission\Models\Role;

class AddAdministrator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'role:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add new super admin to toska cashier manager.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $role = Role::create(['name' => 'admin']);
        $user = User::create([
            'hash' => \Str::random(54) . strtotime(\Carbon\Carbon::now()),
            'name' => "Administrator",
            'username' => "admin",
            'email' => "admin@delay.test",
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ]);
        $user->assignRole($role);
        $this->info('Administrator was added successfully!');
    }
}
