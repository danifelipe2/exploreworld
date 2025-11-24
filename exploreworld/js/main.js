document.addEventListener("DOMContentLoaded", () => {
    // Año automático
    const yearSpan = document.getElementById("anioActual") || document.getElementById("year");
    if (yearSpan) {
        yearSpan.textContent = new Date().getFullYear();
    }

    // Botón hamburguesa + menú
    const navToggle = document.getElementById("navToggle");
    const navLinks  = document.getElementById("navLinks");

    if (navToggle && navLinks) {
        // Estado inicial del icono
        navToggle.textContent = "☰";

        navToggle.addEventListener("click", () => {
            // Abrir/cerrar menú
            const abierto = navLinks.classList.toggle("activo");
            navToggle.classList.toggle("abierto", abierto);

            // Cambiar icono según estado
            navToggle.textContent = abierto ? "✕" : "☰";
        });

        // Cerrar menú al hacer clic en un enlace
        navLinks.querySelectorAll("a").forEach(link => {
            link.addEventListener("click", () => {
                navLinks.classList.remove("activo");
                navToggle.classList.remove("abierto");
                navToggle.textContent = "☰";
            });
        });

        // EFECTO: marcar la opción seleccionada
        navLinks.querySelectorAll("a").forEach(link => {
            link.addEventListener("click", () => {
                navLinks.querySelectorAll("a").forEach(a => {
                    a.classList.remove("seleccionado");
                });
                link.classList.add("seleccionado");
            });
        });
    }

    // Slider automático del inicio
    const slides = document.querySelectorAll(".hero-slider .slide");
    if (slides.length > 0) {
        let index = 0;

        function showSlide() {
            slides.forEach(slide => slide.classList.remove("active"));
            slides[index].classList.add("active");
            index = (index + 1) % slides.length;
        }

        setInterval(showSlide, 5000);
    }

    // Tarjetas clicables
    const tarjetas = document.querySelectorAll(".card-clickable");

    tarjetas.forEach(card => {
        card.addEventListener("click", () => {
            const targetSelector = card.dataset.target || "#reservas";
            const target = document.querySelector(targetSelector);

            const tipoDesdeCard = card.dataset.tipo || "";
            const comentarioDesdeCard = card.dataset.comentario || "";

            if (target) {
                target.scrollIntoView({ behavior: "smooth" });
            }

            const selectTipo = document.getElementById("tipo-viaje");
            const textareaMensaje = document.getElementById("mensaje");

            if (selectTipo && tipoDesdeCard) {
                const opciones = Array.from(selectTipo.options);
                const opcionMatch = opciones.find(
                    opt => opt.textContent.trim() === tipoDesdeCard.trim()
                );
                if (opcionMatch) {
                    selectTipo.value = opcionMatch.value || opcionMatch.textContent;
                }
            }

            if (textareaMensaje) {
                if (comentarioDesdeCard) {
                    textareaMensaje.value = comentarioDesdeCard;
                } else if (tipoDesdeCard) {
                    textareaMensaje.value = "Estoy interesado/a en: " + tipoDesdeCard;
                }
            }
        });
    });

    // Formulario de reservas: mensaje de gracias
    const reservasForm = document.getElementById("reservasForm");
    const reservasMensaje = document.getElementById("reservasMensaje");

    if (reservasForm && reservasMensaje) {
        reservasForm.addEventListener("submit", (e) => {
            e.preventDefault();

            reservasMensaje.textContent = "¡Gracias! Hemos recibido tu solicitud. Nos pondremos en contacto contigo lo antes posible.";
            reservasMensaje.style.display = "block";

            reservasForm.reset();

            setTimeout(() => {
                reservasMensaje.style.display = "none";
            }, 5000);
        });
    }

    // Carrusel de Recomendaciones
    const recomTrack = document.querySelector(".recom-track");
    const recomCards = recomTrack ? recomTrack.querySelectorAll(".recom-card") : [];
    const recomPrev  = document.querySelector(".recom-prev");
    const recomNext  = document.querySelector(".recom-next");

    if (recomTrack && recomCards.length > 0) {
        let recomIndex = 0;

        function irARecomendacion(nuevoIndice) {
            recomIndex = (nuevoIndice + recomCards.length) % recomCards.length;
            recomCards[recomIndex].scrollIntoView({
                behavior: "smooth",
                inline: "start",
                block: "nearest"
            });
        }

        if (recomPrev) {
            recomPrev.addEventListener("click", () => {
                irARecomendacion(recomIndex - 1);
            });
        }

        if (recomNext) {
            recomNext.addEventListener("click", () => {
                irARecomendacion(recomIndex + 1);
            });
        }
    }
});

