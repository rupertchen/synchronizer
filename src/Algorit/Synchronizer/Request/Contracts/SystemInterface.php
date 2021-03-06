<?php namespace Algorit\Synchronizer\Request\Contracts;

use Algorit\Synchronizer\Request\Config;
use Algorit\Synchronizer\Request\Contracts\ResourceInterface;

Interface SystemInterface {

	public function setResource(ResourceInterface $resource);

	public function getResource();

	public function setConfig(Config $config);

	public function getConfig();

	public function setRequest($name = 'Request');

	public function loadRequest();

}
