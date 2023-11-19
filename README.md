# CookieBot for Kirby 3
Integrate CookieBot code into your Kirby 3 site.

## Installation

### Composer
```
composer require lukasbecker/kirby3-cookiebot
```

## Usage
Store your CookieBot ID in the config file.
```
return [
  'lukasbecker.kirby3-cookiebot.id' => 'GTM-XXXXXXX',
];
```

**Cookie consent banner**
Include the snippet in the `<head>`-section of your website template.

**Cookie declaration**
You can use the `cookiebot-declaration`-block to print the cookie declaration.