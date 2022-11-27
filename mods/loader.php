<?php

namespace ContentKitBase\Styles\Loader;

$files = glob(__DIR__ . '/*/config.php');
foreach ($files as $file) {
    require_once $file;
}

