<?php include 'include/header.php' ?>
<?php include 'include/navbar.php' ?>



<section class="container-fluid  py-5">
    <div class="container text-center contact-section">
        <h2>Contáctenos</h2>
        <p>Estamos aquí para ayudarte. Completa el formulario o utiliza uno de nuestros métodos de contacto.</p>
    </div>
</section>



<section class="container py-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5 mb-4">
            <h2 class="text-center mb-3">Información de Contacto</h2>
            <div class="contact-info text-center">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <p><i class="fas fa-phone"></i><strong>Teléfono:</strong> +506 6180 3558</p>
                </div>
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <p><i class="fas fa-envelope"></i><strong>Correo Electrónico:</strong> contacto@bufetellegal.com</p>
                </div>
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <p><i class="fas fa-map-marker-alt"></i><strong>Dirección:</strong> Calle Ejemplo 123, Oficina 456, Ciudad, País</p>
                </div>
            </div>
        </div>
        <div class="col-md-5 horarios-atencion">
            <h2 class="text-center mb-3">Horarios de Atención</h2>
            <div class="text-center">
                <p>Lunes - Viernes: 9:00 AM - 6:00 PM</p>
                <p>Consultas fuera de horario disponibles previa cita.</p>
            </div>
        </div>
    </div>
</section>


<section class="container-fluid py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10">
                <div class="card-whatsapp text-center mb-5">
                    <h5 class="card-title">Contáctame en WhatsApp</h5>
                    <p class="card-text">Puedes contactarme directamente a través de WhatsApp para cualquier consulta o información adicional.</p>
                    <a href="https://wa.me/50661803558" class="btn btn-success">
                        <img src="img/logos--whatsapp-icon.png" alt="WhatsApp"
                            style="width: 24px; margin-right: 8px;"> Enviar mensaje
                    </a>
                </div>
            </div>
        </div>



        <div class="row justify-content-center">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="form-contact p-4">
                        <h3 class="text-center mb-4">Formulario</h3>
                        <form method="post">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre1" name="nombre" placeholder="Ingrese su nombre" autocapitalize="words" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email1" name="email" placeholder="Ingrese su correo electrónico" autocapitalize="words" required>
                            </div>
                            <div class="mb-3">
                                <label for="mensaje" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="mensaje1" name="mensaje" rows="3" placeholder="Ingrese su mensaje" autocapitalize="words" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="enviar" value="enviar">Enviar</button>
                            </div>
                            <div class="form-text text-center mt-3">
                                <p><strong>Te responderemos en las próximas 24 horas.</strong></p>
                            </div>
                        </form>

                        <?php
                        ob_start(); // Inicia el almacenamiento en búfer
                        
                        if (isset($_POST["enviar"])) {
                            $nombre = htmlspecialchars($_POST["nombre"]);
                            $email = htmlspecialchars($_POST["email"]);
                            $mensaje = htmlspecialchars($_POST["mensaje"]);
                        
                            $destino = "sjcorrales.chinchilla77@gmail.com";
                            $asunto = "Nuevo mensaje de $email";
                        
                            // Contenido del correo en HTML
                            $contenido = "
                            <html>
                            <head>
                                <style>
                                    body {
                                        font-family: Arial, sans-serif;
                                        color: #333;
                                        line-height: 1.6;
                                    }
                                    .container {
                                        max-width: 600px;
                                        margin: 0 auto;
                                        padding: 20px;
                                        border: 1px solid #ddd;
                                        border-radius: 5px;
                                    }
                                    h2 {
                                        color: #e67e22;
                                    }
                                    .info {
                                        margin-bottom: 20px;
                                    }
                                    .info p {
                                        margin: 0;
                                    }
                                </style>
                            </head>
                            <body>
                                <div class='container'>
                                    <h2>Nuevo mensaje de $nombre</h2>
                                    <div class='info'>
                                        <p><strong>Nombre:</strong> $nombre</p>
                                        <p><strong>Email:</strong> $email</p>
                                        <p><strong>Mensaje:</strong> $mensaje</p>
                                    </div>
                                </div>
                            </body>
                            </html>
                            ";
                        
                            $header = "MIME-Version: 1.0" . "\r\n";
                            $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                            $header .= "From: memocode@soft.com" . "\r\n";
                        
                            $mail = mail($destino, $asunto, $contenido, $header);
                        
                            if ($mail) {
                                echo "<script>alert('Se envió el correo');</script>";
                                exit();
                            } else {
                                echo "<script>alert('No se envió el correo');</script>";
                            }
                        }
                        
                        ob_end_flush(); 
                        ?>
                        

                    </div>
                </div>
            </div>
        </div>
</section>


<?php include 'include/footer.php' ?>