<?php include "custom.php"; ?>
<?php $titulo = "Iniciar Proyecto";?>
<?php include "includes/header.php"; ?>
<body class="proyecto">
 <?php include "includes/menu.php"; ?>
  <section class="proyecto-principal">
    <div class="proyecto-principal__content">
      <form action="enviado.php">
        <div class="slider single-form">
          <div>
            <h1 class="proyecto-title">Iniciar un Proyecto</h1>
            <p class="proyecto-description">Gracias por su interés en trabajar con nosotros. Por favor, complete los detalles a continuación y nos pondremos en contacto con usted dentro de un día hábil.</p>
            <div class="form">
              <div class="form-container" action="">
                <div class="form-item ">
                  <input class="input" type="text" required="required" id="proyecto-name"/>
                  <label class="label" for="proyecto-name">¿Qué deberíamos llamar?</label>
                </div>
                <div class="form-item ">
                  <input class="input" type="text" required="required" id="proyecto-empresa"/>
                  <label class="label" for="proyecto-empresa">¿Cuál es el nombre de su empresa / organización?</label>
                </div>
                <div class="form-item col-5">
                  <input class="input" type="email" required="required" id="proyecto-correo"/>
                  <label class="label" for="proyecto-correo">¿Cuál es tu correo?</label>
                </div>
                <div class="form-item col-5">
                  <input class="input" type="tel" required="required" id="proyecto-telefono"/>
                  <label class="label" for="proyecto-telefono">¿como te llamamos?</label>
                </div>
                <div class="form-item">
                  <a href="#!" class="btn-enviar next-form"><span>Siguiente<i class="icon-right"></i></span></a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <h1 class="proyecto-title">¿Qué podemos ayudarte?</h1>
            <p class="proyecto-description">Gusto en conocerte, asdsa . Seleccione todas las que correspondan.</p>
            <div class="form">
              <div class="form-container" action="">
                <div class="form-item col-25 form-item__margin no-pad">
                  <input type="checkbox" id="proyecto-web" name="area" value="grafico">
                  <label for="proyecto-web">
                    <i class="icon-icono1 principal-icon"></i>
                    <p>Web</p>
                    <i class="icon-check "></i>
                  </label>
                </div>
                <div class="form-item col-25 form-item__margin no-pad">
                  <input type="checkbox" id="proyecto-diseno" name="area" value="grafico">
                  <label for="proyecto-diseno">
                    <i class="icon-icono2 principal-icon"></i>
                    <p>Diseño</p>
                    <i class="icon-check "></i>
                  </label>
                </div>
                <div class="form-item col-25 form-item__margin no-pad">
                  <input type="checkbox" id="proyecto-redes" name="area" value="programacion">
                  <label for="proyecto-redes">
                    <i class="icon-icono3 principal-icon"></i>
                    <p>Redes</p>
                    <i class="icon-check "></i>
                  </label>
                </div>
                <div class="form-item col-25 form-item__margin no-pad">
                  <input type="checkbox" id="proyecto-imagen" name="area" value="comunity">
                  <label for="proyecto-imagen">
                    <i class="icon-icono4 principal-icon"></i>
                    <p>Imagen</p>
                    <i class="icon-check "></i>
                  </label>
                </div>
                <div class="form-item">
                  <a href="#!" class="btn-enviar next-form"><span>Siguiente<i class="icon-right"></i></span></a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <h1 class="proyecto-title">Cuéntanos sobre el proyecto</h1>
            <p class="proyecto-description">proyecto web? Excelente opcion.</p>
            <div class="form">
              <div class="form-container" action="">
                <div class="form-item">
                  <textarea class="textarea" required="required" id="work-message"></textarea>
                  <label class="label" for="work-message">mensaje</label>
                </div>
                <div class="form-item">
                  <input type="file" required="required" id="talent-cv"/>
                  <label for="talent-cv">Adjuntar los documentos pertinentes <i class="icon-upload"></i></label>
                </div>
                <div class="form-item">
                  <a href="#!" class="btn-enviar next-form"><span>Siguiente<i class="icon-right"></i></span></a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <h1 class="proyecto-title">¿Cuál es su presupuesto?</h1>
            <p class="proyecto-description">Un presupuesto transparente nos ayudará a asegurar que se cumplan las expectativas. 
              ¿No es seguro? Estadios están bien.</p>
            <div class="form">
              <div class="form-container" action="">
                <div class="form-item">
                  <section class="range-slider" id="facet-price-range-slider" data-options='{"output":{"prefix":"S/."},"maxSymbol":"+"}'>
                    <input name="range-1" value="0" min="0" max="3000" step="1" type="range">
                    <input name="range-2" value="3000" min="0" max="3000" step="1" type="range">
                  </section>
                  <div class="forma-item">
                    <div class="form-item forma">
                      <h4 class="title">Periodo de Tiempo</h4>
                      <p>Ayer</p>
                      <input name="periodo" value="3" min="1" max="5" step="1" type="range" class="input-forma">
                      <p>Mientras se necesite</p>
                    </div>
                    <div class="form-item forma">
                      <h4 class="title">Complejidad</h4>
                      <p>Bicicleta</p>
                      <input name="periodo" value="3" min="1" max="5" step="1" type="range" class="input-forma">
                      <p>Astronave</p>
                    </div>
                    <div class="form-item forma">
                      <h4 class="title">Sofisticación</h4>
                      <p>Toyota</p>
                      <input name="periodo" value="3" min="1" max="5" step="1" type="range" class="input-forma">
                      <p>Porsche</p>
                    </div>
                    <div class="form-item">
                      <a href="#!" class="btn-enviar btn-form__Sec"><span>Si tengo mi presupuesto</span></a>
                    </div>
                    <div class="form-item">
                      <a href="#!" class="btn-enviar next-form"><span>Siguiente<i class="icon-right"></i></span></a>
                    </div>
                  </div>

                </div>
                <div class="form-item buttons-up">
                  <a href="#!" class="btn-enviar btn-form__presupuesto"><span>No sé mi presupuesto</span></a>
                </div>
                <div class="form-item buttons-up">
                  <a href="#!" class="btn-enviar next-form"><span>Siguiente<i class="icon-right"></i></span></a>
                </div>
              </div>
            </div>
          </div>
          <div>
            <h1 class="proyecto-title">Finalmente…</h1>
            <p class="proyecto-description">Vamos a terminar con esto.</p>
            <div class="form">
              <form class="form-container" action="">
                <div class="form-item">
                  <input class="input" type="text" required="required" id="proyecto-tiempo"/>
                  <label class="label" for="proyecto-tiempo">¿Cuál es su marco de tiempo ideal?</label>
                </div>
                <div class="form-item">
                  <input class="input" type="text" required="required" id="proyecto-sugerido"/>
                  <label class="label" for="proyecto-sugerido">¿Como supiste de nosotros?</label>
                </div>
                <div class="form-item">
                  <input class="btn-enviar" type="submit" value="Siguiente"/>
                </div>
              </form>
            </div>
          </div>
        </div>
      </form>
    </div>

  </section>
  <footer class="footer blog-footer">
    <?php include "includes/footer.php"; ?>