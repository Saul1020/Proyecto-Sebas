<?php include 'include/header.php' ?>
<?php include 'include/navbar.php' ?>



    <section class="container-fluid py-5">
        <div class="container text-center contact-section">
            <h2>Servicios</h2>
            <p>Ofrecemos una amplia gama de servicios legales diseñados para satisfacer sus necesidades específicas.</p>
        </div>
    </section>



    <section class="container-fluid py-5">
        <div class="container text-center">
            <div class="projcard-container">

                <!-- Recursos de Amparo -->
                <div class="projcard projcard-blue">
                    <div class="projcard-innerbox">
                        <img class="projcard-img" src="/img/Recursos_Amparo.jpg" alt="Imagen de Recursos de Amparo" />
                        <div class="projcard-textbox">
                            <div class="projcard-title">Constitucionales</div>
                            <div class="projcard-subtitle">Protección de derechos constitucionales</div>
                            <div class="projcard-bar"></div>
                            <div class="projcard-description">
                                El area constitucional es una acción legal que se utiliza para proteger los derechos
                                constitucionales de una persona que considera que están siendo vulnerados por alguna
                                autoridad pública.
                            </div>
                            <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#amparoModal">Más
                                información</a>
                        </div>
                    </div>
                </div>

                <!-- Modal Recurso de Amparo -->


                <!-- Habeas Corpus -->
                <div class="projcard projcard-red">
                    <div class="projcard-innerbox">
                        <img class="projcard-img" src="/img/Habeas_Corpus.png" alt="Imagen de Habeas Corpus" />
                        <div class="projcard-textbox">
                            <div class="projcard-title">Penal</div>
                            <div class="projcard-subtitle">Asistencia legal para personas sin recursos</div>
                            <div class="projcard-bar"></div>
                            <div class="projcard-description">
                                Podría referirse a programas o servicios de asistencia legal ofrecidos a personas que no
                                pueden costear servicios de abogados privados, proporcionándoles orientación y
                                representación legal en ciertos casos.
                            </div>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#habeasCorpusModal">Más información</a>
                        </div>
                    </div>
                </div>

                <!-- Escritos Legales -->
                <div class="projcard projcard-green">
                    <div class="projcard-innerbox">
                        <img class="projcard-img" src="/img/Escritos_Legales.png" alt="Imagen de Escritos Legales" />
                        <div class="projcard-textbox">
                            <div class="projcard-title">Escritos Legales</div>
                            <div class="projcard-subtitle">Impugnación de detenciones ilegales</div>
                            <div class="projcard-bar"></div>
                            <div class="projcard-description">
                                Este es un procedimiento legal que permite a una persona detenida impugnar la legalidad
                                de su detención o encarcelamiento. Se utiliza para asegurar que la persona detenida no
                                esté siendo privada ilegalmente de su libertad.
                            </div>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#escritosLegalesModal">Más información</a>
                        </div>
                    </div>
                </div>

                <!-- Consultas en Obligaciones y Familia -->
                <div class="projcard projcard-yellow">
                    <div class="projcard-innerbox">
                        <img class="projcard-img" src="/img/Consultas en Obligaciones y Familia.jpg"
                            alt="Imagen de Consultas en Obligaciones y Familia" />
                        <div class="projcard-textbox">
                            <div class="projcard-title">Consultas en Obligaciones y Familia</div>
                            <div class="projcard-subtitle">Documentación y asesoría en casos familiares</div>
                            <div class="projcard-bar"></div>
                            <div class="projcard-description">
                                Son documentos escritos presentados ante un tribunal u otra autoridad legal que
                                contienen argumentos, hechos y leyes aplicables en apoyo de una posición en un caso
                                legal.
                            </div>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#consultasModal">Más información</a>
                        </div>
                    </div>
                </div>

                <!-- Asistente Legal -->
                <div class="projcard projcard-orange">
                    <div class="projcard-innerbox">
                        <img class="projcard-img" src="/img/Asistente Legal.png" alt="Imagen de Asistente Legal" />
                        <div class="projcard-textbox">
                            <div class="projcard-title">Civil</div>
                            <div class="projcard-subtitle">Asesoría en derechos y responsabilidades</div>
                            <div class="projcard-bar"></div>
                            <div class="projcard-description">
                                Se refiere a buscar asesoramiento legal en cuestiones relacionadas con obligaciones
                                contractuales o derechos y responsabilidades familiares, como divorcios, custodia de
                                niños, o manutención familiar.
                            </div>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#asistenteLegalModal">Más información</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- ================================== INCIO DEL MODAL ================================== -->

    <!-- Modal Recursos de Amparo -->
    <div class="modal fade" id="amparoModal" tabindex="-1" aria-labelledby="amparoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="amparoModalLabel">Constitucionales</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="modal-img">
                    <img src="/img/Recursos_Amparo.jpg" alt="Imagen de Recursos de Amparo" />
                    </div>
                    <h6>¿Qué le ofrecemos?</h6>
                    <p class="modal-description">
                        Nos comprometemos a proteger todos sus derechos constitucionales a través de diversos medios, basados en un 
                        conocimiento profesional profundo del tema e implementando las normas y leyes pertinentes. Utilizamos recursos 
                        de amparo con una base legal sólida para maximizar las probabilidades de que se cumplan las peticiones que usted 
                        solicite.
                    </p>

                    <h6>Medios</h6>
                    <ul>
                        <li>Asesoría legal especializada</li>
                        <li>Recursos de amparo con base legal sólida</li>
                        <li>Habeas Corpus para garantizar su derecho a la libertad</li>
                    </ul>
                </div>

                <div class="modal-footer">
                    <a href="/Contactenos.php" class="btn btn-primary">Contacteme</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Escritos Legales -->
    <div class="modal fade" id="escritosLegalesModal" tabindex="-1" aria-labelledby="escritosLegalesModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="escritosLegalesModalLabel">Escritos Legales</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-img">
                        <img src="/img/Escritos_Legales.png" alt="Imagen de Escritos Legales" />
                    </div>
                    <h6>¿Qué le ofrecemos?</h6>
                    <p class="modal-description">
                    En relación con los escritos legales, le ofrecemos la elaboración de una respuesta legal bien fundamentada. Esto incluye 
                    la preparación de documentos para una contestación o una demanda, asegurando que cada escrito esté argumentado y respaldado 
                    por la normativa vigente, para una defensa sólida y efectiva en el proceso legal.
                    </p>

                    <h6>Medios</h6>
                    <ul>
                        <li>Demandas</li>
                        <li>Recursos de amparo</li>
                        <li>Contestaciones</li>
                        <li>Interdictos</li>
                        <li>Cartas de renuncia</li>
                        <li>Habeas corpus</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a href="/Contactenos.php" class="btn btn-primary">Contacteme</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Consultas en Obligaciones y Familia -->
    <div class="modal fade" id="consultasModal" tabindex="-1" aria-labelledby="consultasModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="consultasModalLabel">Consultas en Obligaciones y Familia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-img">
                        <img src="/img/Consultas en Obligaciones y Familia.jpg"
                            alt="Imagen de Consultas en Obligaciones y Familia" />
                    </div>
                    <h6>¿Qué le ofrecemos?</h6>
                    <p class="modal-description">
                    Aquí nos comprometemos a asegurar que cada persona tenga una familia estable y que todos sus derechos sean respetados 
                    para el adecuado desarrollo de cada miembro. Para lograr esto, utilizaremos todos los medios necesarios, ya sea presentando 
                    denuncias por violencia doméstica, brindando una defensa efectiva para quienes sean acusados, o estableciendo una pensión 
                    adecuada que se ajuste a sus necesidades y al presupuesto que usted, como cliente, pueda proporcionar.
                    </p>

                    <h6>Medios</h6>
                    <ul>
                        <li>Denuncias de violencia doméstica</li>
                        <li>Acompañamiento para la defensa en casos de violencia doméstica</li>
                        <li>Pensión alimentaria</li>
                        <li>Asesoramiento legal</li>
                        <li>Guía en el proceso de adopción</li>
                        <li>Guía en el proceso de divorcio</li>
                        <li>Guía en el proceso matrimonial (personal o de pareja)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a href="/Contactenos.php" class="btn btn-primary">Contacteme</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Asistente Legal -->
    <div class="modal fade" id="asistenteLegalModal" tabindex="-1" aria-labelledby="asistenteLegalModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="asistenteLegalModalLabel">Civil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-img">
                        <img src="/img/Asistente Legal.png" alt="Imagen de Asistente Legal" />
                    </div>
                    <h6>¿Qué le ofrecemos?</h6>
                    <p class="modal-description">
                    En esta área, nos esforzamos por asegurar que usted tenga un proceso óptimo, ya sea para gestionar una deuda o 
                    defender sus derechos patrimoniales. Abordaremos una amplia variedad de temas y responderemos cada una de sus 
                    dudas para garantizar que usted esté completamente informado y respaldado
                    </p>

                    <h6>Medios</h6>
                    <ul>
                        <li>Interdictos</li>
                        <li>Demandas</li>
                        <li>Contestaciones</li>
                        <li>Solicitud de servidumbres forzosas</li>
                        <li>Procedimientos relacionados con el derecho comercial</li>
                        <li>Asesoría legal</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a href="/Contactenos.php" class="btn btn-primary">Contacteme</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Habeas Corpus -->
    <div class="modal fade" id="habeasCorpusModal" tabindex="-1" aria-labelledby="habeasCorpusModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="habeasCorpusModalLabel">Penal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-img">
                        <img src="/img/Habeas_Corpus.png" alt="Imagen de Habeas Corpus" />
                    </div>
                    <h6>¿Qué le ofrecemos?</h6>
                    <p class="modal-description">
                    En esta área, buscamos ofrecer un asesoramiento legal óptimo para garantizar un proceso justo y conforme a la ley. 
                    Tomaremos las medidas necesarias para cada caso, asegurando así una defensa adecuada y evitando que se le imponga 
                    una pena injusta.
                    </p>

                    <h6>Medios</h6>
                    <ul>
                        <li>Defensa penal</li>
                        <li>Asesoramiento legal</li>
                        <li>Preparación de testigos</li>
                        <li>Verificación de pruebas favorables al caso</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a href="/Contactenos.php" class="btn btn-primary">Contacteme</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


<?php include 'include/footer.php' ?>
