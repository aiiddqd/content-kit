<?php

namespace ContentKit\Mods\Loader;

$files = glob(__DIR__ . '/*/config.php');
foreach ($files as $file) {
    require_once $file;
}
