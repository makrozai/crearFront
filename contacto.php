<?php include "custom.php"; ?>
<?php $titulo = "contacto";?>
<?php include "includes/header.php"; ?>
<body class="contact">
 <?php include "includes/menu.php"; ?>
  <section class="contact-principal">
    <div class="ed-container contact-principal__header" data-sr="enter top over 1s">
      <h1 class="ed-item contact-principal__title">Vamos a hacer algo grande juntos.</h1>
      <div class="ed-item">
        <div class="contact-principal__tel">
          <i class="icon-whatsapp"></i> +51 955 277 541
        </div>
      </div>
      <a href="" class="ed-item contact-principal__email">crear@crearperu.com</a>
      <div class="ed-item m-25">
        <a href="" class="contact-principal__social">
          <i class="icon-facebook"></i>/crearperu.com
        </a>
      </div>
      <div class="ed-item m-25">
        <a href="" class="contact-principal__social">
          <i class="icon-instagram"></i>/crearperu.com
        </a>
      </div>
      <div class="ed-item m-25">
        <a href="" class="contact-principal__social">
          <i class="icon-youtube"></i>/crearperu.com
        </a>
      </div>
      <div class="ed-item m-25">
        <a href="" class="contact-principal__social">
          <i class="icon-linkedin"></i>/crearperu.com
        </a>
      </div>
    </div>
  </section>
  <section class="contact-forms" >
    <div class="ed-container">
      <div class="ed-item m-50 contact-forms__work" data-sr="enter top over 1s">
        <h3 class="contact-forms__title">Empecemos a trabajar</h3>
        <div class="form">
          <form class="form-container" action="">
            <div class="form-item col-5">
              <input class="input" type="text" required="required" id="work-name"/>
              <label class="label" for="work-name">nombre</label>
            </div>
            <div class="form-item col-5">
              <input class="input" type="email" required="required" id="work-email"/>
              <label class="label" for="work-email">email</label>
            </div>
            <div class="form-item col-5">
              <input class="input" type="text" required="required" id="work-empresa"/>
              <label class="label" for="work-empresa">empresa</label>
            </div>
            <div class="form-item col-5">
              <input class="input" type="text" required="required" id="work-cargo"/>
              <label class="label" for="work-cargo">cargo</label>
            </div>
            <div class="form-item">
              <textarea class="textarea" required="required" id="work-message"></textarea>
              <label class="label" for="work-message">mensaje</label>
            </div>
            <div class="form-item">
              <input class="btn-enviar" type="submit" value="Enviar"/>
            </div>
          </form>
        </div>
      </div>
      <div class="ed-item m-50 contact-forms__talent" data-sr="enter top over 1s">
        <h3 class="contact-forms__title">En busqueda de talento</h3>
        <div class="form">
          <form class="form-container" action="">
            <div class="form-item col-5">
              <input class="input" type="text" required="required" id="talent-name"/>
              <label class="label" for="talent-name">nombre</label>
            </div>
            <div class="form-item col-5">
              <input class="input" type="email" required="required" id="talent-email"/>
              <label class="label" for="talent-email">email</label>
            </div>
            <div class="form-item ">
              <input class="input" type="tel" required="required" id="talent-telefono"/>
              <label class="label" for="talent-telefono">Teléfono</label>
            </div>
            <div class="form-item col-1-3 form-item__margin">
              <input type="radio" id="talent-grafico" name="area" value="grafico">
              <label for="talent-grafico">Diseño Grafico</label>
            </div>
            <div class="form-item col-1-3 form-item__margin">
              <input type="radio" id="talent-progra" name="area" value="programacion">
              <label for="talent-progra">Programación</label>
            </div>
            <div class="form-item col-1-3 form-item__margin">
              <input type="radio" id="talent-comunity" name="area" value="comunity">
              <label for="talent-comunity">Comunity Manager</label>
            </div>
            <div class="form-item">
              <input class="" type="file" required="required" id="talent-cv"/>
              <label class="" for="talent-cv">Curriculum <i class="icon-upload"></i></label>
            </div>
            <div class="form-item">
              <input class="btn-enviar" type="submit" value="Enviar"/>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer blog-footer">
    <div class="ed-container">
      <div class="ed-item footer-copy__main" data-sr="enter top over 1s">
        <a href="proyecto.html" class="footer-copy__start">Start a project <i class="icon-next"></i></a>
      </div>
    </div>
    <?php include "includes/footer.php"; ?>