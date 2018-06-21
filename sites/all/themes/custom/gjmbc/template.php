<?php
function gjmbc_preprocess_block(&$variables) {
	drupal_set_message('<pre>'. print_r($variables, true) .'</pre>');
};
