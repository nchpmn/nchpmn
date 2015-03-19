<?php if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    snippet('project-single-ajax', array('page' => $page));
} else { 
    snippet('project-single', array('page' => $page));
} ?>