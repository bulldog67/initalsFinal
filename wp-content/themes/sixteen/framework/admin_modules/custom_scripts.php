<?php
add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');
function optionsframework_custom_scripts() { ?>

    <script type="text/javascript">
        jQuery(document).ready(function() {

            jQuery('#example_showhidden').click(function() {
                jQuery('#section-example_text_hidden').fadeToggle(400);
            });

            if (jQuery('#example_showhidden:checked').val() !== undefined) {
                jQuery('#section-example_text_hidden').show();
            }

        });
    </script>

    <?php
}