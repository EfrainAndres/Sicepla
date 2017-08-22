<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::insert('insert into users (id, name, email, password) values (?, ?, ?, ?)', ['1', 'root', 'root@app.com', bcrypt('1qaz.2wsx')]);

        DB::insert('insert into roles (id, name, display_name, description) values (?, ?, ?, ?)', ['1', 'app_root', 'App root', 'Perfil del super usuario']);

        DB::insert('insert into role_user (user_id, role_id) values (?, ?)', ['1', '1']);
    }
}
