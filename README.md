# Latvia vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Latvia vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/lv-vat-format-validator
```

## Usage example

Valid Latvia vat number:

```php
$validator = new LVVatFormatValidator();
$validator->isValid('LV12345678901');
$validator->isValid('12345678901');
```

Returns:

```shell
true
true
```

Invalid Latvia vat number:

```php
$validator = new LVVatFormatValidator();
$validator->isValid('LV123456789011');
$validator->isValid('LV1234567890');
$validator->isValid('123456789011');
$validator->isValid('1234567890');
$validator->isValid('DE12345678901');
```

```shell
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
