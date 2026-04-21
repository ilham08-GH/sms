<?php
/**
 * Manual autoload PhpSpreadsheet + PSR SimpleCache
 */

spl_autoload_register(function ($class) {

    // PhpSpreadsheet
    $prefix = 'PhpOffice\\PhpSpreadsheet\\';
    if (strncmp($class, $prefix, strlen($prefix)) === 0) {
        $base_dir = __DIR__ . '/src/PhpSpreadsheet/';
        $relative = substr($class, strlen($prefix));
        $file = $base_dir . str_replace('\\', '/', $relative) . '.php';
        if (file_exists($file)) {
            require_once $file;
        }
        return;
    }

    // PSR SimpleCache
    $prefix = 'Psr\\SimpleCache\\';
    if (strncmp($class, $prefix, strlen($prefix)) === 0) {
        $base_dir = __DIR__ . '/Psr/SimpleCache/';
        $relative = substr($class, strlen($prefix));
        $file = $base_dir . str_replace('\\', '/', $relative) . '.php';
        if (file_exists($file)) {
            require_once $file;
        }
        return;
    }
});
