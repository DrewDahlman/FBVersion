</div>

<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>

  FB.init({
    appId  : 'XXXXXXXX', // Replace with your APP ID
    status : true, // check login status
    cookie : true, // enable cookies to allow the server to access the session
    xfbml  : true  // parse XFBML
  });
  FB.Canvas.setSize();
	
	// Do things that will sometimes call sizeChangeCallback()
	function sizeChangeCallback() {
	FB.Canvas.setSize();
	}

</script>
</body>
</html>
