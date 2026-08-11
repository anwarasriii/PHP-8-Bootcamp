<?php

$name = "david";

$heredoc = <<< EOD
Multinfjanf
$name sanfasfsanfaslfna
EOD;


$nowdoc = <<< 'EOD'
Multinfjanf
$name sanfasfsanfaslfna
EOD;

echo $heredoc;
echo $nowdoc;

