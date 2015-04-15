<?php
date_default_timezone_set('UTC');

$config = array(
  'path' => '/',
  'callback_url' => '{path}callback.php',
  'security_salt' => 'LDxmiilYf8Fyw5W10rx4W1KsVrieQCnpBzzpTBWA5vJidQKDx8pMJbmw28R1C4m',
  'Strategy' => array(
    'Crozdesk' => array(
      'client_id' => 'API_KEY',
      'client_secret' => 'API_SECRET'
    ),
  ),
);
