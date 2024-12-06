<?php
/**
 * The header template part.
 *
 * @copyright  Copyright (c) 2020, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<?php wp_head(); ?>
	</head>
  <header class="site-header">
    <p class="site-title">
		<h1>Techsphere</h1>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php bloginfo( 'name' ); ?>
      </a>
    </p>
    <p class="site-description"><?php bloginfo( 'description' ); ?></p>
	<?php
	wp_nav_menu( array(
    	'theme_location' => 'menu-1',
	) );
	?>
  </header><!-- .site-header -->
