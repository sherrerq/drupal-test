<?php

include __DIR__ . '/settings/settings.shared.php';
$databases['default']['default'] = array (
  'database' => 'drupal',
  'username' => 'drupal',
  'password' => 'admtec00',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['hash_salt'] = 'W9UezvL-Z_-6phrSYetB6VTiKfk7aUvctiri4LaErq0ruA-GLoSbvpCuqjTC6ck7ajXObgdBHg';
