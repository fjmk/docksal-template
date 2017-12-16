<?php
/**
 * Servers configuration
 */

$i = 0;

/**
 * Server #1
 */
$i++;
$cfg['Servers'][$i]['verbose'] = getenv('MYSQL_DATABASE');
$cfg['Servers'][$i]['user'] = getenv('MYSQL_USER');
$cfg['Servers'][$i]['password'] = getenv('MYSQL_PASSWORD');
$cfg['Servers'][$i]['hide_db'] = '^(information_schema)$';

/* Add common configuration */
foreach ($cfg['Servers'] as $key => $server) {
  /* Authentication type */
  $cfg['Servers'][$key]['auth_type'] = 'config';
  /* Server parameters */
  $cfg['Servers'][$key]['host'] = getenv('PMA_HOST');
  $cfg['Servers'][$i]['connect_type'] = 'tcp';
  $cfg['Servers'][$i]['compress'] = false;
}

$cfg['ShowChgPassword'] = false;
$cfg['ShowCreateDb'] = false;
$cfg['MaxNavigationItems'] = 999;
