<?php
$index = file_get_contents(dirname(__DIR__) . '/index.html');
$index = str_replace('easybib.github.com/pear', 'pear.deploy.easybib.com', $index);
echo $index;
