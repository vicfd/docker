<?php
$CONFIG = array (
  'dbhost' => 'host.docker.internal',
  'memcache.local' => '\\OC\\Memcache\\Redis',
  'redis' =>  array ('host' => 'drive_redis', 'port' => 6379, 'timeout' => 0.0, 'password' => '<redis_pass>'),
);