<?php
/**
 * Server(s) configuration
 */
declare(strict_types=1);
$cfg['blowfish_secret'] = '';
$i = 0;
/**
 * 1st server
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
/* Server parameters */
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;

/**
 * phpMyAdmin configuration storage settings.
 */

/* User used to manipulate with storage */
$cfg['Servers'][$i]['controluser'] = 'newuser';
$cfg['Servers'][$i]['controlpass'] = '';
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';


