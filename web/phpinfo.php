<?php 

// this check prevents access to debug front controllers that are deployed by accident to production servers.
// feel free to remove this, extend it or make something more sophisticated.
if (!in_array(@$_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1', '10.214.56.138')))
{
  die('You are not allowed to access this file. Check '.basename(__FILE__).' for more information. Your IP ' . $_SERVER['REMOTE_ADDR']);
}


phpinfo();