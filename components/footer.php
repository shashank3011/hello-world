<?php
<<<<<<< HEAD
	if($use_page != "TRUE") {
		echo "Working";
		header("location: ../index.php");
	}
?>

<div id="footer">
	<p><a href="index.php">Home</a> | <a href="http://scis.uohyd.ac.in" target="_blank">SCIS</a> | <a href="http://uohyd.ac.in" target="_blank">UOH</a></p>
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
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Examples</a> | <a href="page.html">A Page</a> | <a href="another_page.html">Another Page</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; simple_light | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a></p>
    </div>
</body>
>>>>>>> bb7fc97e1fd2fc89c3a5e46b5784e85ab6fbce6f
