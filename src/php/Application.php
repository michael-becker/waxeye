<?php


spl_autoload_register(function ($class_name) {
    include $class_name . ".php";
});

$parser = new GenParser();
$result = $parser->parse("3");
printf("%s\n", $result);
