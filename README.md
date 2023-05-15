<div align="center">
  <img src="https://treblle-github.s3.amazonaws.com/header.png"/>
</div>
<div align="center">

# Treblle Security Headers

<a href="https://docs.treblle.com/en/integrations" target="_blank">Integrations</a>
<span>&nbsp;&nbsp;•&nbsp;&nbsp;</span>
<a href="http://treblle.com/" target="_blank">Website</a>
<span>&nbsp;&nbsp;•&nbsp;&nbsp;</span>
<a href="https://docs.treblle.com" target="_blank">Docs</a>
<span>&nbsp;&nbsp;•&nbsp;&nbsp;</span>
<a href="https://blog.treblle.com" target="_blank">Blog</a>
<span>&nbsp;&nbsp;•&nbsp;&nbsp;</span>
<a href="https://twitter.com/treblleapi" target="_blank">Twitter</a>
<span>&nbsp;&nbsp;•&nbsp;&nbsp;</span>
<a href="https://treblle.com/chat" target="_blank">Discord</a>
<br />

  <hr />
</div>

[![Latest Version](https://img.shields.io/packagist/v/treblle/security-headers)](https://packagist.org/packages/treblle/security-headers)
[![Total Downloads](https://img.shields.io/packagist/dt/treblle/security-headers)](https://packagist.org/packages/treblle/security-headers)
[![MIT Licence](https://img.shields.io/packagist/l/treblle/security-headers)](LICENSE)
[![Tests](https://github.com/treblle/security-headers/actions/workflows/tests.yml/badge.svg)](https://github.com/treblle/security-headers/actions/workflows/tests.yml)

Treblle makes it super easy to understand what’s going on with your APIs and the apps that use them. Just by adding
Treblle to your API out of the box you get:

* Real-time API monitoring and logging
* Auto-generated API docs with OAS support
* API analytics
* Quality scoring
* One-click testing
* API management on the go
* and more...

## Requirements

* PHP 8.2

## Installation

You can install Treblle Security Headers via [Composer](http://getcomposer.org/). Simply run the following command:

```bash
composer require treblle/security-headers
```

## Getting started

To start, you need to publish the configuration.

```bash
php artisan vendor:publish --provider="Treblle\SecurityHeaders\Providers\PackageServiceProvider" --tag="security-headers"
```

This is the default content of the config file that will be published at `config/headers.php`:

```php
return [
    'remove' => [
        'X-Powered-By',
        'x-powered-by',
        'Server',
        'server',
    ],

    'referrer-policy' => 'no-referrer-when-downgrade',

    'strict-transport-security' => 'max-age=31536000; includeSubDomains',

    'certificate-transparency' => 'enforce, max-age=30',

    'permissions-policy' => 'autoplay=(self), camera=(), encrypted-media=(self), fullscreen=(), geolocation=(self), gyroscope=(self), magnetometer=(), microphone=(), midi=(), payment=(), sync-xhr=(self), usb=()',

    'content-type-options' => 'nosniff',
];
```

## Community 💙

First and foremost: **Star and watch this repository** to stay up-to-date.

Also, follow our [Blog](https://blog.treblle.com), and on [Twitter](https://twitter.com/treblleapi).

You can chat with the team and other members on [Discord](https://treblle.com/chat) and follow our tutorials and other video material at [YouTube](https://youtube.com/@treblle).

[![Treblle Discord](https://img.shields.io/badge/Treblle%20Discord-Join%20our%20Discord-F3F5FC?labelColor=7289DA&style=for-the-badge&logo=discord&logoColor=F3F5FC&link=https://treblle.com/chat)](https://treblle.com/chat)

[![Treblle YouTube](https://img.shields.io/badge/Treblle%20YouTube-Subscribe%20on%20YouTube-F3F5FC?labelColor=c4302b&style=for-the-badge&logo=YouTube&logoColor=F3F5FC&link=https://youtube.com/@treblle)](https://youtube.com/@treblle)

[![Treblle on Twitter](https://img.shields.io/badge/Treblle%20on%20Twitter-Follow%20Us-F3F5FC?labelColor=1DA1F2&style=for-the-badge&logo=Twitter&logoColor=F3F5FC&link=https://twitter.com/treblleapi)](https://twitter.com/treblleapi)

### How to contribute

Here are some ways of contributing to making Treblle better:

- **[Try out Treblle](https://docs.treblle.com/en/introduction#getting-started)**, and let us know ways to make Treblle better for you. Let us know here on [Discord](https://treblle.com/chat).
- Join our [Discord](https://treblle.com/chat) and connect with other members to share and learn from.
- Send a pull request to any of our [open source repositories](https://github.com/treblle) on Github. Check the contribution guide on the repo you want to contribute to for more details about how to contribute. We're looking forward to your contribution!

### Contributors
<a href="https://github.com/treblle/security-headers/graphs/contributors">
  <p align="center">
    <img  src="https://contrib.rocks/image?repo=treblle/security-headers" alt="A table of avatars from the project's contributors" />
  </p>
</a>
