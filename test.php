<?php

$phar = new PharData('test.zip');
print($phar->getMTime());
