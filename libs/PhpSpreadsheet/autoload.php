<?php
/**
 * Manual autoload PhpSpreadsheet + PSR SimpleCache
 * FIXED VERSION
 */

spl_autoload_register(function ($class) {

    // ==============================
    // PhpSpreadsheet
    // ==============================
    if (strpos($class, 'PhpOffice\\PhpSpreadsheet\\') === 0) {
        $base_dir = __DIR__ . '/src/PhpSpreadsheet/';
        $relative_class = substr($class, strlen('PhpOffice\\PhpSpreadsheet\\'));
        $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
        if (file_exists($file)) {
            require_once $file;
        }
        return;
    }

    // ==============================
    // PSR SimpleCache (LEVEL SAMA DENGAN PhpSpreadsheet)
    // ==============================
    if (strpos($class, 'Psr\\SimpleCache\\') === 0) {
        $base_dir = dirname(__DIR__) . '/Psr/SimpleCache/';
        $relative_class = substr($class, strlen('Psr\\SimpleCache\\'));
        $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
        if (file_exists($file)) {
            require_once $file;
        }
        return;
    }
});
