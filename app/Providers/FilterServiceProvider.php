<?php namespace FluentKit\Providers;

use Illuminate\Routing\FilterServiceProvider as ServiceProvider;

class FilterServiceProvider extends ServiceProvider {

	/**
	 * The filters that should run before all requests.
	 *
	 * @var array
	 */
	protected $before = [
		'FluentKit\Http\Filters\MaintenanceFilter',
	];

	/**
	 * The filters that should run after all requests.
	 *
	 * @var array
	 */
	protected $after = [
		//
	];

	/**
	 * All available route filters.
	 *
	 * @var array
	 */
	protected $filters = [
		'auth' => 'FluentKit\Http\Filters\AuthFilter',
		'auth.basic' => 'FluentKit\Http\Filters\BasicAuthFilter',
		'csrf' => 'FluentKit\Http\Filters\CsrfFilter',
		'guest' => 'FluentKit\Http\Filters\GuestFilter',
	];

}