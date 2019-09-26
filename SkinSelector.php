<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">
      <select name="skinfile">
        <?php
          $aux = "./css/";
          $dir = opendir($aux);
          while( ($arxiu = readdir($dir)) !== false ) {
            if (is_file($aux . $arxiu)) {
              echo "<option value='$arxiu'> $arxiu </option>";
            }
          }
          closedir($dir);
         ?>
    	</select>
	    <br/>
	    <input type="submit" name="changeCSS" value="Cambiar CSS" />
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["changeCSS"])) {
          changeCSS();
        }
        function changeCSS() {
          echo "<head><link rel='stylesheet' type='text/css' href='css/".$_POST["skinfile"]."'></head>";
        }
       ?>
    </form>
  </body>
</html>
