# Omnipay iDeal for Laravel 4

This package uses the classes from [omnipay-ideal](https://github.com/markdegrootnl/omnipay-ideal)

<b>Generate hashes from numbers, like YouTube or Bitly.
Use hashids when you do not want to expose your database ids to the user.</b>

## Installation
Begin by installing the package through Composer. Edit your project's `composer.json` file to require `markdegroot/omnipay-ideal`.

  ```php
  "require": {
    "markdegroot/omnipay-ideal": "1.x"
  }
  ```

Next use Composer to update your project from the the Terminal:

  ```bash
  php composer.phar update
  ```

Once the package has been installed you'll need to add the service provider. Open your `app/config/app.php` configuration file, and add a new item to the `providers` array.

  ```php
  'Markdegroot\OmnipayIdeal\OmnipayIdealServiceProvider'
  ```

After doing this you also need to add an alias. In your `app/config/app.php` file, add this to the `aliases` array.

  ```php
  'Ideal' => 'Markdegroot\OmnipayIdeal\Ideal'
  ```

Now last but not least you need to publish to package configuration from your Terminal:

  ```bash
  php artisan config:publish markdegroot/omnipay-ideal
  ```
