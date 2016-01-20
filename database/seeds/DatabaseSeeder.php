<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
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

        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
=======
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
	}

>>>>>>> 44993b7528930e302201e0bdf122e0afa196aa41
}
