<?php
namespace Bolt\Tests\Provider;

use Bolt\Omnisearch;
use Bolt\Provider\OmnisearchServiceProvider;
use Bolt\Tests\BoltUnitTest;

/**
 * Class to test src/Provider/OmnisearchServiceProvider.
 *
 * @author Ross Riley <riley.ross@gmail.com>
 */
class OmnisearchServiceProviderTest extends BoltUnitTest
{
    public function testProvider()
    {
        $app = $this->getApp();
        $provider = new OmnisearchServiceProvider($app);
        $app->register($provider);
        $this->assertInstanceOf(Omnisearch::class, $app['omnisearch']);
    }
}
