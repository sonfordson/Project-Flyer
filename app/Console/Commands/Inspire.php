<<<<<<< HEAD
<?php

namespace App\Console\Commands;
=======
<?php namespace App\Console\Commands;
>>>>>>> 44993b7528930e302201e0bdf122e0afa196aa41

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

<<<<<<< HEAD
class Inspire extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'inspire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display an inspiring quote';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->comment(PHP_EOL.Inspiring::quote().PHP_EOL);
    }
=======
class Inspire extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'inspire';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Display an inspiring quote';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		$this->comment(PHP_EOL.Inspiring::quote().PHP_EOL);
	}

>>>>>>> 44993b7528930e302201e0bdf122e0afa196aa41
}
