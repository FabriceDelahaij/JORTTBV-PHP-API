# Jortt API client for PHP
PHP WEB API JSON for [Jortt B.V](https://jortt.nl)

[![Build Status](https://scrutinizer-ci.com/g/FabriceDelahaij/JORTTBV-PHP-API/badges/build.png?b=master)](https://scrutinizer-ci.com/g/FabriceDelahaij/JORTTBV-PHP-API/build-status/master)
[![Floobits Status](https://floobits.com/FabriceDelahaij/JORTTBV-PHP-API.svg)](https://floobits.com/FabriceDelahaij/JORTTBV-PHP-API/redirect)
[![Dependency Status](https://www.versioneye.com/user/projects/59f0a10e0fb24f10903282b7/badge.svg?style=flat-square)](https://www.versioneye.com/user/projects/59f0a10e0fb24f10903282b7)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/FabriceDelahaij/JORTTBV-PHP-API/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/FabriceDelahaij/JORTTBV-PHP-API/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/6db1bb4f-530b-4a5b-a93b-651150a7e8d8/mini.png)](https://insight.sensiolabs.com/projects/6db1bb4f-530b-4a5b-a93b-651150a7e8d8)

## Requirements ##
To use the Jortt API client, the following things are required:

+ Visit website for free [Jortt account](https://app.jortt.nl/aanmelden/gratis)
+ Create a new [profile](https://app.jortt.nl/profile/api) to generate API keys
+ PHP 5.2 or 5.5
+ PHP cURL extension


Easy way to install the Jortt BV API client is to require it with Composer.

$ composer require fabricedelahaij/jorttbv-php-api:1.0.*

{
    "require": {
        "fabricedelahaij/jorttbv-php-api": "1.0.*"
    }
}



## Getting started ##

```php
require_once('class.jorttbv.php'); 

define('APPID', 'DEMO');
define('APPTOKEN', '000-000-000');

$api = new JorttBV_Client(APPID, APPTOKEN);
$data = [
	'customer' => [
		'company_name' => '',
		'attn' => '',
		"email" => '',
		'extra_information' => '',
		'invoice_language' => NL,
		'address' =>[
		        'street' => '',
			'postal_code' => '',
        		'city' => '',
        		'country_code' => NL
		]
	]
];
$api->request($data, 'customers');
```

## API documentation ##
If you wish to learn more about our API, please visit the [API Documentation](https://app.jortt.nl/api-documentatie).

## License ##
[BSD (Berkeley Software Distribution) License](https://opensource.org/licenses/bsd-license.php). Copyright (c) 2017, Extreemhost.

## Support ##
Contact: [www.extreemhost.nl](https://extreemhost.nl) — info@extreemhost — +31 316-23 40 40
