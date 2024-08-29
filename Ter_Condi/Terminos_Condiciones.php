<?php include'../include/header.php'; ?>
<?php include'../include/navbar.php'; ?>

    <!-- Heros Section -->
    <header id="home" class="heros">
        <div class="container">
            <div class="heros-contente">
                <h1>Terminos y condiciones</h1>
                <p>Su solución confiable para servicios legales especializados</p>
            </div>
        </div>
    </header>



<!-- Terms and Conditions Section -->
<section id="terms" class="terms">
        <div class="container">
            <p>Bienvenido a [Nombre de tu Firma o Sitio Web] ("nosotros", "nuestro" o "nos"). Estos Términos y Condiciones rigen el uso de nuestros servicios legales ofrecidos a través de nuestro sitio web [URL del Sitio Web] ("Sitio Web"). Al acceder o utilizar nuestro Sitio Web y/o nuestros servicios, usted acepta cumplir con estos Términos y Condiciones. Si no está de acuerdo con alguna parte de estos términos, por favor, no utilice nuestro Sitio Web ni nuestros servicios.</p>
            
            <h3>1. Información General</h3>
            <p>El Sitio Web proporciona información sobre nuestros servicios legales y permite a los usuarios solicitar más información y contacto con nosotros. El uso del Sitio Web está sujeto a estos Términos y Condiciones, así como a nuestra Política de Privacidad.</p>

            <h3>2. Servicios Ofrecidos</h3>
            <p>Ofrecemos los siguientes servicios:</p>
            <ul>
                <li>Recursos de Amparo Constitucionales</li>
                <li>Habeas Corpus Penal</li>
                <li>Escritos Legales</li>
                <li>Consultas en Obligaciones y Familia</li>
                <li>Asistencia Legal Civil</li>
            </ul>

            <h3>3. Uso del Sitio Web</h3>
            <p>Usted se compromete a utilizar el Sitio Web únicamente con fines legales y de acuerdo con estos Términos y Condiciones. Está prohibido utilizar el Sitio Web de manera que pueda dañar, deshabilitar, sobrecargar o deteriorar el Sitio Web o interferir con el uso y disfrute del Sitio Web por parte de terceros.</p>

            <h3>4. Propiedad Intelectual</h3>
            <p>Todo el contenido del Sitio Web, incluyendo textos, gráficos, logotipos, imágenes y software, es propiedad de [Nombre de la Firma] o de sus licenciantes y está protegido por las leyes de propiedad intelectual. Está prohibida la reproducción, distribución, modificación o cualquier otro uso del contenido sin el consentimiento previo por escrito de [Nombre de la Firma].</p>

            <h3>5. Responsabilidad</h3>
            <p>El Sitio Web y sus contenidos se proporcionan "tal cual" y sin garantías de ningún tipo, ya sean expresas o implícitas. [Nombre de la Firma] no será responsable de ningún daño o pérdida que resulte del uso del Sitio Web o de la imposibilidad de utilizarlo.</p>

            <h3>6. Enlaces a Sitios de Terceros</h3>
            <p>El Sitio Web puede contener enlaces a sitios web de terceros que no están controlados por [Nombre de la Firma]. No nos hacemos responsables de los contenidos, políticas de privacidad o prácticas de dichos sitios de terceros.</p>

            <h3>7. Modificaciones</h3>
            <p>Nos reservamos el derecho de modificar estos Términos y Condiciones en cualquier momento. Las modificaciones entrarán en vigor tan pronto como se publiquen en el Sitio Web. Le recomendamos que revise periódicamente estos Términos y Condiciones para estar informado de cualquier cambio.</p>

            <h3>8. Ley Aplicable</h3>
            <p>Estos Términos y Condiciones se regirán e interpretarán de acuerdo con las leyes del [País]. Cualquier disputa que surja en relación con estos Términos y Condiciones será resuelta exclusivamente en los tribunales competentes del [Ciudad/Región].</p>

            <h3>9. Contacto</h3>
            <p>Si tiene alguna pregunta sobre estos Términos y Condiciones, por favor contáctenos a través de:</p>
            <p>[Dirección de contacto]</p>
            <p>[Correo electrónico]</p>
        </div>
    </section>


    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <h2>Servicios Ofrecidos</h2>
            <div class="service-card">
                <h3>Recursos de Amparo Constitucionales</h3>
                <p>Protección de derechos constitucionales mediante acciones legales.</p>
            </div>
            <div class="service-card">
                <h3>Habeas Corpus Penal</h3>
                <p>Asistencia legal para personas sin recursos en casos de detención ilegal.</p>
            </div>
            <div class="service-card">
                <h3>Escritos Legales</h3>
                <p>Elaboración y presentación de documentos legales para impugnaciones y demandas.</p>
            </div>
            <div class="service-card">
                <h3>Consultas en Obligaciones y Familia</h3>
                <p>Documentación y asesoría en casos familiares, incluyendo pensiones alimentarias y adopción.</p>
            </div>
            <div class="service-card">
                <h3>Asistencia Legal Civil</h3>
                <p>Asesoría en derechos y responsabilidades contractuales y civiles.</p>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="pricing">
        <div class="container">
            <h2>Precios</h2>
            <p>Aquí puede encontrar la información detallada sobre nuestros precios.</p>
            <!-- Puedes añadir más detalles sobre precios aquí -->
        </div>
    </section>

    
    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Contacto</h2>
            <p>Para consultas y más información, contáctenos a través de:</p>
            <form action="#" method="post">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>
<?php include'../include/footer.php'; ?>