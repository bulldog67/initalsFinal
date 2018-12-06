<?php
/* Sanitization Functions Common to Multiple Settings go Here, Specific Sanitization Functions are defined along with add_setting() */
function sixteen_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

function sixteen_sanitize_positive_number( $input ) {
    if ( ($input >= 0) && is_numeric($input) )
        return $input;
    else
        return '';
}

function sixteen_sanitize_category( $input ) {
    if ( term_exists(get_cat_name( $input ), 'category') )
        return $input;
    else
        return '';
}

function sixteen_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}