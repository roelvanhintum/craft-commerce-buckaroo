# Buckaroo Gateway for Craft Commerce

Adds Buckaroo gateway support to Craft Commerce. Currently supports: Credit Card, Ideal, PayPal and Sepa Direct Debit.

## Requirements

- Craft 4 and up
- Craft Commerce 4 and up

## Installation

Install from the Plugin Store or composer:

```bash
composer require born05/craft-commerce-buckaroo
./craft install/plugin commerce-buckaroo
```

## Setup

Add a new gateway as described in [Gateway Configuration](https://docs.craftcms.com/commerce/v2/gateway-config.html)

## Config

Create a `config/commerce-buckaroo.php` with the following contents:

```php
<?php

return [
    'testMode' => false,
];
```

## License

Copyright © [Born05](https://www.born05.com/)

See [license](https://github.com/born05/craft-commerce-buckaroo/blob/master/LICENSE.md)
