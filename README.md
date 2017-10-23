# Jortt API client for PHP
PHP WEB API JSON for [Jortt B.V](https://jortt.nl)

[![Floobits Status](https://floobits.com/Extreemhost/JORTTBV-PHP-WEB-API.svg)](https://floobits.com/Extreemhost/JORTTBV-PHP-WEB-API/redirect)

## Requirements ##
To use the Jortt API client, the following things are required:

+ Visit website for free [Jortt account](https://app.jortt.nl/aanmelden/gratis)
+ Create a new [profile](https://app.jortt.nl/profile/api) to generate API keys
+ PHP 5.2 or 5.5
+ PHP cURL extension

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
 Contact: [www.extreemhost.nl](https://extreemhost.nl) ? info@extreemhost ? +31 316-23 40 40