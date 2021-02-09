<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		// \Illuminate\Support\Facades\Log::debug('broadcast routes.');
		Broadcast::routes(['middleware' => ['auth:sanctum']]);
		// Broadcast::routes();

		require base_path('routes/channels.php');
	}
}
