<html>
  <body>
    <h2>Ecuaciones de segundo grado</h2>
    <image src="ecuacion.png" width="148px" height="125px">
    <form action="index.php" method="GET">
      <p>A: <input type="text" name="a"/></p>
      <p>B: <input type="text" name="b"/></p>
      <p>C: <input type="text" name="c"/></p>
      <p><input type="submit" name="Resolver" value="Resolver"></p>
      <?php
        # Constantes
        define("BACKGROUND_COLOR", "#b8c1ff");
        define("H2_COLOR" , "#0800ff");
        # Cambiar de color el fondo con php
        echo "<body style='background-color:". BACKGROUND_COLOR . "'>";
        if (isset($_GET['Resolver'])) {
          $a = $_GET["a"];
          $b = $_GET["b"];
          $c = $_GET["c"];
          $result = $b * $b - 4 * $a * $c;
          if ($result < 0) {
            echo "<p>La ecuación no tiene solución</p>";
          } elseif ($result == 0) {
            echo "x = ";
            echo (-$b / 2 * $a);
          } else {
            echo "x1 = ";
            echo ((-$b + sqrt($result)) / (2 * $a));
            echo "<br>";
            echo "x2 = ";
            echo ((-$b - sqrt($result)) / (2 * $a));
          }
        }
       ?>
    </form>
  </body>
</html>
