<?php
<<<<<<< HEAD
	if($use_page != "TRUE") {
		header("location: ../index.php");
	}
?>

<div id="menubar">
  <ul id="menu">
	<!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
	<li class="home-selected"><a href=".">Home</a></li>
	<li class="events-selected"><a href="events/">Events</a></li>
	<li class="sysAdmins-selected"><a href="sysAdmins/">Sys. Admins</a></li>
	<li class="moodle-selected"><a href="moodle/">Moodle</a></li>
	<li class="ps-selected"><a href="ps/">Print Server</a></li>
	<li class="contactUs-selected"><a href="contactUs/">Contact Us</a></li>
  </ul>
</div>
=======

	$pages_path = "/ailab/";


	if($use_page != "TRUE") {
		echo "Working";
		header("location: $pages_path/index.php");
	}


?>


<body>
<base href="/ailab/" />
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="home-selected"><a href=".">Home</a></li>
	  <li class="events-selected"><a href="events/">Events</a></li>
          <li class="moodle-selected"><a href="moodle/">Moodle</a></li>
	  <li class="ps-selected"><a href="/ailab/ps-new/login.php">Print server Page</a></li>
          <li class="contactUs-selected"><a href="contactUs/">Contact Us</a></li>
        </ul>
      </div>
</body>	
>>>>>>> bb7fc97e1fd2fc89c3a5e46b5784e85ab6fbce6f
