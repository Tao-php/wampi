<?php
namespace Application\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Symfony\Component\Finder\Finder;

class FinderServiceProvider implements ServiceProviderInterface
{
	public function register(Container $app)
	{
		$app['finder'] = $app->factory(function() use ($app) {
			return new Finder();
		});
	}
}
