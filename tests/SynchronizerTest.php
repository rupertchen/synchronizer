<?php namespace Algorit\Synchronizer\Tests;

use Orchestra\Testbench\TestCase;

class SynchronizerTest extends TestCase {

	protected function getPackageProviders()
	{
		return ['Algorit\Synchronizer\SynchronizerServiceProvider'];
	}

	public function setUp()
	{
		parent::setUp();

		$this->synchronizer = $this->app['synchronizer'];
	}
}