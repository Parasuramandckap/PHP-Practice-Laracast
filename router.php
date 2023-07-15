<?php
$uri = parse_url($_SERVER["REQUEST_URI"])["path"] ;




$routes = [
    "/"=>"controller/index.php",
    "/about"=>"controller/about.php",
    "/content"=>"controller/content.php",
    "/note"=>"controller/note.php",
    "/notes"=>"controller/notes.php"
];

function controllTorouter($uri,$routes){
    if (array_key_exists($uri,$routes)){
        require $routes[$uri];
    }
    else{
        abort();
    }
}
controllTorouter($uri,$routes);

function abort($code = 404){
    http_response_code($code);
    require "views/404.php";
    die();
}
