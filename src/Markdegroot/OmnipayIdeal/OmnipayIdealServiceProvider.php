<?php namespace Markdegroot\OmnipayIdeal;

use Omnipay\Omnipay;
use Illuminate\Support\ServiceProvider;
use Config;

class OmnipayIdealServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('markdegroot/omnipay-ideal');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */

	public function register()
	{
		$this->app->bind('Omnipay\Ideal\Gateway', function ($app) {
			$gateway = Omnipay::create('Ideal');
			$gateway->setMerchantId(Config::get("omnipay-ideal::merchantId"));
			$gateway->setSubId(Config::get("omnipay-ideal::subId"));
			$gateway->setAcquirer(Config::get("omnipay-ideal::acquirer"));
			$gateway->setPublicKeyPath(Config::get("omnipay-ideal::publicKeyPath"));
			$gateway->setPrivateKeyPath(Config::get("omnipay-ideal::privateKeyPath"));
			$gateway->setPrivateKeyPassphrase(Config::get("omnipay-ideal::privateKeyPassphrase"));
			$gateway->setTestMode(Config::get("omnipay-ideal::testMode"));
			return $gateway;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('Omnipay\Ideal\Gateway');
	}
}
