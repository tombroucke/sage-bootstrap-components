<?php

namespace App;

add_filter('sage/filter_templates/paths', function($paths){
    array_unshift($paths, 'vendor/tombroucke/sage-bootstrap-components/resources');
    return $paths;
})
