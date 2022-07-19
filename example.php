<?php

require __DIR__ . '/vendor/autoload.php';

\Spatie\Browsershot\Browsershot::url('https://reddit.com')
    ->noSandbox()
    ->fullPage()
    ->save('example.png');
