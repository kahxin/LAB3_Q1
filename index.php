<!DOCTYPE html>
<html>
<head>
  <title>Yap Kah Xin PHP</title>
  <meta charset="UTF-8">
</head>

<body>
  <h1>Yap Kah Xin 202635</h1>
  <p>ASCII ART:</p>
  <pre>	
	*   *    *   *    *    *
	 * *     *  *      *  *
          *      * *        *
	  *      *  *      *  *
	  *      *   *    *    *

  </pre>
  <?php
	echo 'The SHA256 hash of "Yap Kah Xin" is <br>';
	print hash('sha256','Yap Kah Xin');
  ?>
 
  <p><a href="check.php">Click here to check the error setting</a></p>
  <p><a href="fail.php">Click here to cause a traceback</a></p>

</body>
</html>

