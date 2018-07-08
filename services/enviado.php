<?php include "custom.php"; ?>
<?php $titulo = "Enviado";?>
<?php include "includes/header.php"; ?>
<body class="enviado">
 <?php include "includes/menu.php"; ?>
  <section class="enviado-principal">
    <div class="ed-container">
      <div class="ed-item">
        <h1 class="enviado-principal__title">¡Enviado! <i class="icon-frank"></i></h1>
        <p class="enviado-principal__subtitle">Gracias por completar nuestro planificador de proyectos.</p>
        <p class="enviado-principal__description">Vamos a estar en contacto muy pronto para discutir el proyecto con más detalle. Quiere ver más? ¿Por qué no 
          <a href="<?php echo RUTA;?>blog.php" class="enviado-principal__link">echas un vistazo a nuestro blog ?</a>
        </p>
        <a href="<?php echo RUTA;?>services.php" class="enviado-principal__return"><i class="icon-left"></i>Volver a Crear</a>
      </div>
    </div>
  </section>
  <!--<footer class="footer blog-footer">
    <div class="ed-container footer-copy" data-sr="enter top over 1s">
      <div class="ed-item m-1-3 footer-copy__data">
        <a href="" class="footer-copy__contact">contact@humaan.com.au</a>
        <a href="" class="footer-copy__contact">+61 8 9471 7645</a>
      </div>
      <div class="ed-item m-1-3 footer-copy__news">
        <form action="">
          <div class="form-item footer-copy__form">
              <input class="input" type="tel" required="required" id="footer-news"/>
              <label class="label" for="footer-news">Ingresa tu Correo</label>
            </div>
        </form>
        <i class="icon-mail"></i>
      </div>
      <div class="ed-item m-1-3 footer-copy__share">
        <a href="#!" class="footer-copy__contact">Twitter</a>
        <a href="#!" class="footer-copy__contact">Instagram</a>
        <a href="#!" class="footer-copy__contact">Facebook</a>
      </div>
      <div class="ed-item footer-copy__author">
        <p>© 2017 <a href="" class="footer-copy__contact">Humaan</a></p>
        <p>Privacy policy</p>
      </div>
    </div>
  </footer>-->
  <!-- Puede hacer pruebas aqui -->
  <script src="js/slick.min.js"></script>
  <script src="js/ed-grid.js"></script>
  <script src="js/script.js"></script>

</body>
</html>