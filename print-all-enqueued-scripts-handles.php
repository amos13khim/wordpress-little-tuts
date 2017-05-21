/**
 * This action will print all handles of all scripts
 * that are enqueued on your wordpress website.
 * Just copy and paste that code and it will work.
 */
 
add_action( 'wp_print_scripts', 'DEBUG_print_enqueued_scripts' );

function DEBUG_aminach_print_enqueued_scripts() {
	
    global $wp_scripts, $wp_styles;
	
    echo "<h3>Enqueued Scripts</h3>";
    echo "<pre>";
	
    foreach( $wp_scripts->queue as $handle )
        echo "<p><b>$handle</b></p>";
		
    echo "</pre>";
    echo "<br>";
    echo "<h3>Enqueued Styles</h3>";
    echo "<pre>";
	
    foreach( $wp_styles->queue as $handle )
        echo "<p><b>$handle</b></p>";
		
    echo "</pre>";

    die;
}