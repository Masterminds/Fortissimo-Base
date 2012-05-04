<?php
/**
 * @file
 * This is a default config file for a Fortissimo site.
 */

// This registry is defined in web/index.php. Using a global here "feels" like a
// naughty idea. But, this is PHP, it works, and there is plenty of time to create
// a better solution here.
global $registry;

$registry->route('hello-world')
  ->does('\Fortissimo\Command\EchoText', 'echo')
    ->using('type', 'text/plain')
    ->using('text', 'Hello world!');