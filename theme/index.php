<?php get_header(); ?>
<?php 
$url = $_SERVER['REQUEST_URI'];
if ($url == '/works' || $url == '/works/') {
	get_template_part( 'works', get_post_format() );
} else if ($url == '/info' || $url == '/info/') {
	get_template_part( 'info', get_post_format() );
} else {
	get_template_part( 'content', get_post_format() );
}

?>

<?php get_footer(); ?>