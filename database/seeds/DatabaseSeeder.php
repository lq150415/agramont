<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Darsalud\User;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('ClientesTableSeeder');
        $this->command->info('User table seeded!');


        Model::reguard();
    }
}
class ClientesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'NOM_USU' => 'Ana Maria Eugenia',
            'APA_USU' => 'Zapata',
            'AMA_USU' => 'Guzman',
            'EST_USU' => 'Dar salud 20 de octubre',
            'ARE_USU' => 'Medico general',
            'TEL_USU' => '78792110',
            'NIC_USU' => 'azapata',
            'NIV_USU' => '2',
            'password' => bcrypt('carioca'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon:: now()
        ]);
       
    }

}