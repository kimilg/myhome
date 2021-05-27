<?php
require 'vendor/autoload.php';
use Michelf\MarkdownExtra;
$markdownParser = new MarkdownExtra();
echo $markdownParser->transform("#Hello World");
?>