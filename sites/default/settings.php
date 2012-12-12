<?php

// misc
$db_prefix = '';
$update_free_access = FALSE;

// production
$db_url = 'mysqli://casablanca:ca$ablanca77-@localhost/casablanca';
$base_url = 'http://www.casablancamining.com';  // NO trailing slash!

/**
 * PHP settings:
 */
ini_set('arg_separator.output',     '&amp;');
ini_set('magic_quotes_runtime',     0);
ini_set('magic_quotes_sybase',      0);
ini_set('session.cache_expire',     200000);
ini_set('session.cache_limiter',    'none');
ini_set('session.cookie_lifetime',  2000000);
ini_set('session.gc_maxlifetime',   200000);
ini_set('session.save_handler',     'user');
ini_set('session.use_only_cookies', 1);
ini_set('session.use_trans_sid',    0);
ini_set('url_rewriter.tags',        '');
ini_set('memory_limit', '128M');

# $cookie_domain = 'example.com';
