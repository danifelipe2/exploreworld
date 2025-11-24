<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exploreworld</title>
    <link rel="icon" type="image/png" href="imagenes/icno.png">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <img src="imagenes/logo de explore_.png" alt="ExploreWorld" style="height:90px;">
                </div>

                <!-- BOTÓN HAMBURGUESA -->
                <button class="nav-toggle" id="navToggle" aria-label="Abrir menú">
                    ☰
                </button>

                <!-- MENÚ -->
                <ul id="navLinks">
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#vuelos">Vuelos</a></li>
                    <li><a href="#hoteles">Hoteles</a></li>
                    <li><a href="#transporte">Transporte</a></li>
                    <li><a href="#reservas">Reservas</a></li>
                    <li><a href="#recomendaciones">Recomendaciones</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- INICIO -->
    <section id="inicio" class="hero-slider">
        <!-- Contenedor de imágenes -->
        <div class="slides">
            <div class="slide active" style="background-image: url('imagenes/madrid.jpg');"></div>
            <div class="slide" style="background-image: url('imagenes/Puerta del Alcalá.jpg');"></div>
            <div class="slide" style="background-image: url('imagenes/Things Madrid.jpg');"></div>
        </div>

        <!-- Capa oscura -->
        <div class="hero-overlay"></div>

        <!-- Contenido centrado -->
        <div class="hero-content">
            <h1>Stopover Hola Madrid</h1>
            <p>Elige esta opción y podrás hacer una escala gratuita de hasta 10 días en Madrid.</p>
            <a href="#reservas" class="btn-hero">RESERVA STOPOVER</a>
        </div>
    </section>

    <!-- VUELOS -->
    <section id="vuelos">
    <div class="container">
        <h2>Vuelos</h2>
        <p>Trabajamos con múltiples aerolíneas para ofrecerte las mejores rutas y tarifas según tu presupuesto.</p>
        <div class="grid">

            <!-- TARJETA 1: Vuelos nacionales -->
            <a href="vuelos-nacionales.html" class="card card-link">
                <h3>Vuelos nacionales</h3>
                <p>Opciones rápidas y económicas dentro del país. Ideal para escapadas de fin de semana.</p>
            </a>

            <!-- TARJETA 2: Vuelos internacionales -->
            <a href="vuelos-internacionales.html" class="card card-link">
                <h3>Vuelos internacionales</h3>
                <p>Conexiones a los principales destinos del mundo con escalas optimizadas.</p>
            </a>

            <!-- TARJETA 3: Clases y servicios -->
            <a href="clases-servicios.html" class="card card-link">
                <h3>Clases y servicios</h3>
                <p>Te asesoramos sobre clase turista, premium, business y first, según lo que necesites.</p>
            </a>

        </div>
    </div>
</section>


    <!-- HOTELES -->
    <section id="hoteles">
        <div class="container">
            <h2>Hoteles</h2>
            <p>Seleccionamos alojamientos según tu estilo de viaje: económico, familiar, romántico o de lujo.</p>

            <div class="grid hoteles-grid">
                <div class="card hotel-card card-clickable" data-target="#reservas">
                    <div class="card-img-hotel">
                        <img src="imagenes/hotel 3.jpg" alt="Hoteles 3 estrellas">
                    </div>
                    <h3>Hoteles 3★</h3>
                    <p>La opción perfecta si buscas comodidad a buen precio.</p>
                    <ul class="servicios-lista">
                        <li>Wi-Fi gratis</li>
                        <li>Desayuno incluido (según hotel)</li>
                        <li>Ubicaciones céntricas o cerca del transporte</li>
                    </ul>
                </div>

                <div class="card hotel-card card-clickable" data-target="#reservas">
                    <div class="card-img-hotel">
                        <img src="imagenes/5 estrellas.jpg" alt="Resorts y hoteles 5 estrellas">
                    </div>
                    <h3>Resorts &amp; 5★</h3>
                    <p>Experiencias todo incluido, spa, piscinas y servicios premium.</p>
                    <ul class="servicios-lista">
                        <li>Todo incluido (comidas y bebidas)</li>
                        <li>Spa, piscina y zonas de relax</li>
                        <li>Actividades para adultos y familias</li>
                    </ul>
                </div>

                <div class="card hotel-card card-clickable" data-target="#reservas">
                    <div class="card-img-hotel">
                        <img src="imagenes/The VietNam Hostel _ 85 Design.jpg" alt="Apartamentos y hostales">
                    </div>
                    <h3>Apartamentos y hostales</h3>
                    <p>Opciones flexibles para viajes largos o en grupo.</p>
                    <ul class="servicios-lista">
                        <li>Cocina propia o compartida</li>
                        <li>Habitaciones privadas o compartidas</li>
                        <li>Ideal para grupos y estancias largas</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- TRANSPORTE -->
    <section id="transporte">
        <div class="container">
            <h2>Transporte</h2>
            <p>Coordinamos todos los traslados para que tu viaje sea fluido desde que sales de casa.</p>
            <div class="grid transporte-grid">
                <div class="card transporte-card card-clickable" data-target="#reservas">
                    <div class="card-img-transporte">
                        <img src="imagenes/Rent Luxury Vans.jpg" alt="Traslados aeropuerto">
                    </div>
                    <h3>Traslados aeropuerto</h3>
                    <p>Servicios privados o compartidos desde y hacia el aeropuerto.</p>
                    <ul class="servicios-lista">
                        <li>Chofer esperando en el aeropuerto</li>
                        <li>Vehículos privados o shuttle compartido</li>
                        <li>Horarios coordinados con tu vuelo</li>
                    </ul>
                </div>

                <div class="card transporte-card card-clickable" data-target="#reservas">
                    <div class="card-img-transporte">
                        <img src="imagenes/BYD Yuan Plus EV 2021.jpg" alt="Alquiler de coche">
                    </div>
                    <h3>Alquiler de coche</h3>
                    <p>Diferentes categorías de vehículos con seguro y kilometraje adaptado a tus necesidades.</p>
                    <ul class="servicios-lista">
                        <li>Coches económicos, familiares y SUV</li>
                        <li>Opciones con seguro a todo riesgo</li>
                        <li>Recogida en aeropuerto u oficina en ciudad</li>
                    </ul>
                </div>

                <div class="card transporte-card card-clickable" data-target="#reservas">
                    <div class="card-img-transporte">
                        <img src="imagenes/taxi.jpg" alt="Transporte local">
                    </div>
                    <h3>Transporte local</h3>
                    <p>Trenes, buses, ferris y más para moverte dentro de tu destino sin complicaciones.</p>
                    <ul class="servicios-lista">
                        <li>Billetes de tren y bus</li>
                        <li>Pases de transporte urbano</li>
                        <li>Conexiones entre ciudades cercanas</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- RESERVAS -->
    <section id="reservas">
        <div class="container reservas-container">
            <h2>Reservas</h2>
            <p class="reservas-intro">
                Cuéntanos cómo quieres viajar y te enviaremos una propuesta personalizada.
            </p>

            <!-- solo añadí id para que funcione tu JS de “gracias” -->
            <form class="reservas-form" id="reservasForm">
                <label for="nombre">Nombre completo</label>
                <input type="text" id="nombre" name="nombre" placeholder="Tu nombre">

                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" placeholder="tucorreo@ejemplo.com">

                <label for="telefono">Teléfono</label>
                <input type="tel" id="telefono" name="telefono" placeholder="+34 600 000 000">

                <label for="origen">Ciudad de origen</label>
                <input type="text" id="origen" name="origen" placeholder="Ej. Madrid">

                <label for="destino">Destino(s) deseado(s)</label>
                <input type="text" id="destino" name="destino" placeholder="Ej. París, Roma, Cancún">

                <label for="fechas">Fechas aproximadas</label>
                <input type="text" id="fechas" name="fechas" placeholder="Ej. 10 al 20 de agosto">

                <label for="presupuesto">Presupuesto aproximado</label>
                <input type="text" id="presupuesto" name="presupuesto" placeholder="Ej. 800€ por persona">

                <label for="tipo-viaje">Tipo de viaje</label>
                <select id="tipo-viaje" name="tipo-viaje">
                    <option value="">Selecciona una opción</option>
                    <option>Vacaciones en pareja</option>
                    <option>Viaje familiar</option>
                    <option>Viaje de amigos</option>
                    <option>Viaje de negocios</option>
                    <option>Luna de miel</option>
                </select>

                <label for="mensaje">Comentarios / necesidades especiales</label>
                <textarea id="mensaje" name="mensaje" rows="4" placeholder="Cuéntanos más sobre lo que buscas..."></textarea>

                <!-- BOTÓN GLASS -->
                <button type="submit" class="btn-glass">
                    Enviar solicitud
                </button>
            </form>

            <!-- Mensaje de gracias -->
            <div id="reservasMensaje" class="reservas-mensaje"></div>

            <p class="reservas-nota">
                *Este formulario es de ejemplo. Deberás configurarlo con tu correo o sistema de reservas real.
            </p>
        </div>
    </section>

    <!-- RECOMENDACIONES -->
    <section id="recomendaciones">
        <div class="container">
            <h2>Recomendaciones y ofertas</h2>
            <p>Algunas ideas de viajes que podemos organizar para ti:</p>

            <div class="recom-slider">
                <button class="recom-btn recom-prev" aria-label="Oferta anterior">‹</button>

                <div class="recom-track">
                    <!-- Escapadas fin de semana -->
                    <div
                        class="card recom-card card-clickable"
                        data-target="#reservas"
                        data-tipo=""
                        data-comentario="Estoy interesado/a en una escapada de fin de semana.">
                        <div class="recom-img">
                            <img src="imagenes/europa.jpg" alt="Escapadas de fin de semana">
                        </div>
                        <h3>Escapadas de fin de semana</h3>
                        <p>Ciudades europeas con vuelos cortos y hoteles céntricos. Ideal para 2–3 noches.</p>
                    </div>

                    <!-- Todo incluido playa -->
                    <div
                        class="card recom-card card-clickable"
                        data-target="#reservas"
                        data-tipo=""
                        data-comentario="Estoy interesado/a en un paquete todo incluido en playa.">
                        <div class="recom-img">
                            <img src="imagenes/playa.jpg" alt="Todo incluido en playa">
                        </div>
                        <h3>Todo incluido en playa</h3>
                        <p>Paquetes a destinos de sol y playa con vuelos, traslados y resort incluido.</p>
                    </div>

                    <!-- Viajes a medida -->
                    <div
                        class="card recom-card card-clickable"
                        data-target="#reservas"
                        data-tipo=""
                        data-comentario="Estoy interesado/a en un viaje a medida.">
                        <div class="recom-img">
                            <img src="imagenes/usa ee.uu.jpg" alt="Viajes a medida">
                        </div>
                        <h3>Viajes a medida</h3>
                        <p>Rutas personalizadas (por ejemplo, Asia, EEUU, Sudamérica) adaptadas a tu ritmo y presupuesto.</p>
                    </div>

                    <!-- Viajes de aventura -->
                    <div
                        class="card recom-card card-clickable"
                        data-target="#reservas"
                        data-tipo=""
                        data-comentario="Estoy interesado/a en un viaje de aventura.">
                        <div class="recom-img">
                            <img src="imagenes/paisajes.jpg" alt="Viajes de aventura">
                        </div>
                        <h3>Viajes de aventura</h3>
                        <p>Trekking, naturaleza y actividades al aire libre para los más aventureros.</p>
                    </div>

                    <!-- Viajes de negocios -->
                    <div
                        class="card recom-card card-clickable"
                        data-target="#reservas"
                        data-tipo="Viaje de negocios"
                        data-comentario="Estoy interesado/a en un viaje de negocios.">
                        <div class="recom-img">
                            <img src="imagenes/new york.jpg" alt="Viajes de negocios">
                        </div>
                        <h3>Viajes de negocios</h3>
                        <p>Organización de vuelos, hoteles y traslados para viajes corporativos y ferias.</p>
                    </div>

                    <!-- Cruceros y experiencias -->
                    <div
                        class="card recom-card card-clickable"
                        data-target="#reservas"
                        data-tipo=""
                        data-comentario="Estoy interesado/a en un crucero o experiencia especial.">
                        <div class="recom-img">
                            <img src="imagenes/Caribbean Cruises_ Cruise to Caribbean _ Royal Caribbean Cruises.jpg" alt="Cruceros y experiencias">
                        </div>
                        <h3>Cruceros y experiencias</h3>
                        <p>Cruceros, safaris, rutas gastronómicas y experiencias únicas en el destino.</p>
                    </div>
                </div>

                <button class="recom-btn recom-next" aria-label="Oferta siguiente">›</button>
            </div>
        </div>
    </section>

    <!-- CONTACTO -->
    <section id="contacto">
        <div class="container contacto-container">
            <h2>Contacto</h2>
            <p class="contacto-intro">
                ¿Tienes dudas o prefieres hablar directamente con nosotros? Estamos aquí para ayudarte.
            </p>

            <div class="contacto-grid">
                <!-- Datos de contacto -->
                <div class="contacto-card">
                    <h3>Información de contacto</h3>
                    <ul class="contacto-lista">
                        <li>📞 <span>Teléfono:</span> +34 600 000 000</li>
                        <li>✉️ <span>Correo:</span> info@tumundoviajes.com</li>
                        <li>📍 <span>Dirección:</span> Calle Ejemplo 123, Ciudad, País</li>
                        <li>⏰ <span>Horario:</span> Lunes a viernes de 9:00 a 18:00</li>
                    </ul>

                    <div class="contacto-botones">
                        <a href="https://wa.me/34600000000" target="_blank" class="btn-whatsapp">
                            💬 Escríbenos por WhatsApp
                        </a>

                        <div class="social-links">
                            <span>Síguenos:</span>
                            <a href="#" target="_blank">📷 Instagram</a>
                            <a href="#" target="_blank">📘 Facebook</a>
                            <a href="#" target="_blank">🎵 TikTok</a>
                        </div>
                    </div>
                </div>

                <!-- Mapa / imagen del local -->
                <div class="contacto-card contacto-mapa">
                    <div class="contacto-mapa-placeholder">
                        Aquí puede ir un mapa o una foto de tu oficina/agencia.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            &copy; <span id="year"></span> Tu Mundo Viajes · Todos los derechos reservados.
        </div>
    </footer>

    <!-- JS -->
    <script src="js/main.js"></script>
</body>
</html>

