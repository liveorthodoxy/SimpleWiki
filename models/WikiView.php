<?php
/**
 */

require_once __DIR__ . "/../autoload.php";

class WikiView {

    private static $mustache;

    public function __construct() {

        $options = ['extension' => '.html'];
        self::$mustache = new Mustache_Engine([
                'loader'           => new Mustache_Loader_FilesystemLoader(__DIR__ . '/../views/default', $options),
                'partials_loader'  => new Mustache_Loader_FilesystemLoader(__DIR__ . '/../views/default/partials', $options),
                'escape'           => function ($value) {

                    return htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                },
                'charset'          => 'UTF-8',
                'strict_callables' => true,
                'pragmas'          => array(Mustache_Engine::PRAGMA_FILTERS),
            ]
        );
    }

    public function render($template, $data = null) {

        return self::$mustache->render($template, $data);
    }
}
