<?php
require_once __DIR__ . '/vendor/autoload.php';
$bugsnag = Bugsnag\Client::make('706d75ff9bd8cf901173410ad82b337a');
Bugsnag\Handler::register($bugsnag);
$bugsnag->notifyException(new RuntimeException("Test error"));

echo "Hello, world!";