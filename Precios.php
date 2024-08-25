<?php include 'include/header.php' ?>
<?php include 'include/navbar.php' ?>




<section class="container-fluid py-5">
    <div class="container text-center contact-section">
        <h2>Precios</h2>
        <p>Aquí puedes encontrar información detallada sobre nuestros precios y tarifas. Si tienes alguna pregunta o necesitas una cotización personalizada, no dudes en ponerte en contacto con nosotros.</p>
    </div>
</section>



<!-- SECCIÓN DE PRECIOS -->
<section class="container-fluid py-5">
  <div class="container text-center contact-section-Tabla">
      <div class="table-responsive">
          <table class="table table-bordered custom-table">
              <thead>
                  <tr>
                      <th>Servicio</th>
                      <th>Descripción</th>
                      <th>Precio</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Consultas Iniciales</td>
                      <td>Reunión inicial para discutir su caso y posibles soluciones legales.</td>
                      <td>$50</td>
                  </tr>
                  <tr>
                      <td>Asesoría Legal en Obligaciones y Familia</td>
                      <td>Asesoramiento en temas de derecho de familia y obligaciones contractuales.</td>
                      <td>$100 por hora</td>
                  </tr>
                  <tr>
                      <td>Escritos Legales</td>
                      <td>Redacción de documentos legales, como contratos y demandas.</td>
                      <td>$200</td>
                  </tr>
                  <tr>
                      <td>Recursos de Amparo</td>
                      <td>Protección de derechos constitucionales ante autoridades públicas.</td>
                      <td>$150 por caso</td>
                  </tr>
                  <tr>
                      <td>Habeas Corpus</td>
                      <td>Representación en casos de detención ilegal o injusta.</td>
                      <td>$250</td>
                  </tr>
              </tbody>
          </table>
          <p class="mt-4">Para servicios específicos o casos más complejos, los precios pueden variar. Por favor para discutir su situación particular y recibir una cotización personalizada.</p>
      </div>
  </div>
</section>

<!-- SECCIÓN DE PREGUNTAS FRECUENTES -->
<section class="faq-section py-5">
  <div class="container">
      <h2 class="faq-title">Preguntas Frecuentes</h2>
      <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                      aria-expanded="true" aria-controls="collapseOne">
                      ¿Los precios incluyen impuestos?
                  </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                      No, los precios mencionados no incluyen impuestos. Estos se calcularán y añadirán según las leyes aplicables.
                  </div>
              </div>
          </div>
          <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                      aria-expanded="false" aria-controls="collapseTwo">
                      ¿Cómo se calculan los precios por hora?
                  </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                      Los precios por hora se calculan en base al tiempo dedicado al caso. Cada consulta o trabajo legal se factura al final de cada sesión.
                  </div>
              </div>
          </div>
          <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                      aria-expanded="false" aria-controls="collapseThree">
                      ¿Ofrecen descuentos por casos complejos o de larga duración?
                  </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                      Sí, ofrecemos descuentos y tarifas personalizadas para casos complejos o de larga duración. Por favor, contáctenos para más información.
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>




<?php include 'include/footer.php' ?>