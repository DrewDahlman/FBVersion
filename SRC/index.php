<?php
 include("header.php");
?>

<?php 
	
	// create the Facebook Graph SDK object
	require_once('facebook.php');
	$facebook = new Facebook(array(
		'appId'=>'XXXXXXXX', // replace with your value
		'secret'=>'XXXXXXXXXXXXX' // replace with your value
			));
	$signedRequest = $facebook->getSignedRequest();
	
	// Inspect the signed request
	if($signedRequest['page']['liked'] == 1){
	
		include('like.php');
	
	} else {
	
		include('noLike.php');
	
	}
?>
<?php
include("footer.php");
?>

