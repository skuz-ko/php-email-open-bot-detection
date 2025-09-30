# php-email-open-bot-detection

A PHP library to detect email open bots, helping distinguish between real users and automated bots that trigger email
open events. This improves the accuracy of your email campaign analytics.

## Features

- Detects common email open bots
- Easy integration with PHP projects via Composer
- Lightweight and efficient

## Installation

```bash
composer require skuz-ko/php-email-open-bot-detection
```

## Usage

```php
<?php

use SkuzKo\PhpEmailOpenBotDetection\EmailOpenBotDetector;

if (EmailOpenBotDetector::isBot($_SERVER['HTTP_USER_AGENT'])) {
    // Handle bot
} else {
    // Handle real user
}
```
