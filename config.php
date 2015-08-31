<?php
/**
 * Date: 15/2/27
 */

return [
    "APP_NAME"            => "SimpleWiki",
    "WIKI_DIR"            => __DIR__ . "/wiki",
    "WIKI_FILE_EXTENSION" => ".md",
    "DEFAULT_VIEW"        => __DIR__ . "/views/default",
    "DEFAULT_WIKI"        => __DIR__ . "/README",
    "TIMEZONE"            => "America/Chicago",
    "IGNORE_FILES"        => [
        ".gitignore",
        ".",
        ".."
    ]
];
