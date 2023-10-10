<?php

require_once 'vendor/autoload.php';
use Cocur\Slugify\Slugify;

$slug = new Slugify();
$slug->addRule('ão','aaa');

echo $slug->slugify("Teste com acentuação para geração de slug")."<br>";
echo $slug->slugify("Teste com separadores diferentes", "_")."<br>";
echo $slug->slugify("Meu nome é João");
?>