<?php

require_once 'inc/MCAPI.class.php';

// FIXME: Update these two lines accroding to your Mailchimp configuration.
$api_key = 'YOUR_API_KEY';
$list_id = 'YOUR_LIST_ID';

$api = new MCAPI($api_key);
 
// Submit subscriber data to MailChimp
// For parameters doc, refer to: http://apidocs.mailchimp.com/api/1.3/listsubscribe.func.php
$retval = $api->listSubscribe( $list_id, $_POST["email"], null, 'html', false, true );
 
if ($api->errorCode){
    echo "<h4>Please try again.</h4>";
} else {
    echo "<h4>Thank you, you have been added to our mailing list.</h4>";
}