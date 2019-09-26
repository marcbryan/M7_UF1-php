<html>
  <form>
    <p>Nom: <input type="text" name="nom"/> </p>
    <p>Cognoms: <input type="text" name="cognoms"/></p>
    <p>Email: <input type="text" name="email"/></p>
    <p><input type="submit" name="save" value="Guardar"</p>
  </form>
  <?php
    if (isset($_GET["save"])) {
      $nom = $_GET["nom"];
      $cognoms = $_GET["cognoms"];
      $email = $_GET["email"];
      if (!empty($nom) && !empty($cognoms) && !empty($email)) {
        echo "Hola $nom $cognoms , tu email es $email";
        $file = "nombres.txt";
        # Abre el fichero para obtener el contenido existente
        $actual = file_put_contents($file);
        # Escribe el contenido al fichero
      } else {
        echo "<script type='text/javascript'>alert('Hay campos vacíos');</script>";
      }
    }
   ?>
</html>
