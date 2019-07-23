<?php
function gl_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Type here..." />
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'gl_my_search_form' );
?>
