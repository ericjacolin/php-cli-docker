<?php

$input_file = 'tests/inkscape.svg';
$output_file = 'tests/inkscape.png';
@\unlink($output_file);
$command = "convert -background 'transparent' $input_file -resize 'x1000' $output_file";
\exec($command);
