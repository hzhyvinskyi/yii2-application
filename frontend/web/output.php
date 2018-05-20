<?php

ob_start();

echo 'Hello<br>';
echo 'Hello<br>';
echo 'Hello<br>';
echo 'Hello<br>';
echo 'Hello<br>';

$content = ob_get_clean();

$content = strtr($content, 'l', 'L');
echo $content;
