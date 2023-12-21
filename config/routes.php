<?php

use myshop\Router;

Router::add('^admin/?$', ['controller' => 'Main', 'action' => 'index', 'admin_prefix' => 'admin']);
Router::add('^(p<controller>[a-z-]+)/(^p<action>[a-z-]+)/?$', ['admin_prefix' => 'admin']);
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(p<controller>[a-z-]+)/(^p<action>[a-z-]+)/?$');