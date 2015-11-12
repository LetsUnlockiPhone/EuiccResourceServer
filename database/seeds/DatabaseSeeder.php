<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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

        $this->call(eisTableSeeder::class);
        $this->call(euicccapabilitiesTableSeeder::class);
        $this->call(audittrailTableSeeder::class);
        $this->call(profileinfoTableSeeder::class);
        $this->call(subscriptionaddressTableSeeder::class);
        $this->call(securitydomainTableSeeder::class);        
        
        Model::reguard();
    }
}
