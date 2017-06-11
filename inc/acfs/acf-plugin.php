<?php

// 3. Hide ACF field group menu item
add_filter('acf/settings/show_admin', '__return_false');


// 4. Include ACF
include_once (MGTC_PATH . "/inc/advanced-custom-fields-pro/acf.php");