<?php
wp_head();

$html = file_get_contents(get_template_directory() . '/dist/index.html');
$dir = get_template_directory_uri() . '/dist/static';
$clean = str_replace('/static', $dir, $html);

echo $clean;


wp_footer();
?>