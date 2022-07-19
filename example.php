<?php

require __DIR__ . '/vendor/autoload.php';

use Spatie\Browsershot\Browsershot;

Browsershot::url('https://example.com')
    ->noSandbox() // Needed to run dockerized puppeteer.
    ->fullPage()
    ->save('example.png');
