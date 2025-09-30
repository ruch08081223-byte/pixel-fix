<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="../vistas/CSS/Estilos.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Fix</title>
</head>
<body>
    <header>
      <?php

           include "../vistas/vista_encabesado.php";

      ?>
    </header>
    <nav class="main-menu">
     <?php
                                             
         include "../vistas/vista_menusuperior.php" 

      ?>
    </nav>
    
    <div class="content">
        <nav class="sub-menu">
         <?php

              include "../vistas/vista_menuinterno.php"

         ?>
        </nav>
        <h2>Pixel Fix</h2>
        <p>Valores y viciones.</p>
        <?php
    $fundadores = "Hector Santiago Ruiz Cano, Gadiel Izai Martines Torres, Luis Angel Valenzuela Sosa.";
    $grupo = "5A Programacion";
    $objetivo = "Ofrecer servicios de reparacion accesibles para todos y de buena calidad";
    $vision = "Garantisar el buen trato y mantenimiento a los dispositivos electronicos de nuestros clientes";
    $valor = "La confiansa y el respeto son los simientos para este emprendimiento";

    echo "<p>$fundadores</p>";
    echo "<p>$grupo</p>";
    echo "<p>$objetivo</p>";
    echo "<p>$vision</p>";
    echo "<p>$valor<p>";
        ?>
    </div>
     <?php

         include "../vistas/vista_piedepagina.php"

     ?>
    
  <footer>
     <link rel="stylesheet" href="../Vistas/CSS/redessociales.css">
    <div class="footer-content">
  <div class="social-icons">
    <a href="https://www.facebook.com/TuPerfil" target="_blank">
      <img src="../vistas/imagen/Facebook.jpg" alt="Facebook">
    </a>
    <a href="https://www.twitter.com/TuPerfil" target="_blank">
      <img src="../vistas/imagen/Twitter.png" alt="Twitter">
    </a>
    <a href="https://www.instagram.com/TuPerfil" target="_blank">
      <img src="../vistas/imagen/Instagram.jpg" alt="Instagram">
    </a>
        <a href="https://www.Whatsapp.com/TuPerfil" target="_blank">
      <img src="../vistas/imagen/Whatsapp.png" alt="Whatsapp">
    </a>
        </a>
        <a href="https://www.Tiktok.com/TuPerfil" target="_blank">
      <img src="../vistas/imagen/Tiktok.png" alt="tiktok">
    </a>
    <!-- Puedes agregar más redes sociales aquí -->
  </div>
    </div>
    
</body>
</html>
