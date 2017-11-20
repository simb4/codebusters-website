<?php get_header(); ?>
<?php include 'const.php'; ?>
<?php 
if ($_SERVER['REQUEST_URI'] == '/works') {
	get_template_part( 'works', get_post_format() );		
} else if ($_SERVER['REQUEST_URI'] == '/info') {
	get_template_part( 'info', get_post_format() );		
} else {
	get_template_part( 'content', get_post_format() );
}

?>

<?php get_footer(); ?>