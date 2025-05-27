$(document).ready(function () {
    // Contador regressivo
    function updateCountdown() {
        const eventDate = new Date("June 6, 2025 09:00:00").getTime();
        const now = new Date().getTime();
        const distance = eventDate - now;

        // Se a data já passou, mostra zeros
        if (distance < 0) {
            $("#countdown-days").text("00");
            $("#countdown-hours").text("00");
            $("#countdown-minutes").text("00");
            $("#countdown-seconds").text("00");
            return;
        }

        // Cálculo de tempo otimizado
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Atualizar os elementos com formatação padronizada
        $("#countdown-days").text(days < 10 ? "0" + days : days);
        $("#countdown-hours").text(hours < 10 ? "0" + hours : hours);
        $("#countdown-minutes").text(minutes < 10 ? "0" + minutes : minutes);
        $("#countdown-seconds").text(seconds < 10 ? "0" + seconds : seconds);
    }

    // Inicializa o contador e define o intervalo de atualização
    updateCountdown();
    setInterval(updateCountdown, 1000);

    // Abas da programação
    $(".schedule-tab").click(function () {
        $(".schedule-tab").removeClass("active");
        $(this).addClass("active");

        const tabId = $(this).data("day");
        $(".schedule-day").removeClass("active");
        $("#" + tabId).addClass("active");
    });

    // Scroll suave para os links de âncora
    $('a[href^="#"]').on("click", function (event) {
        let target = $(this.getAttribute("href"));

        if (target.length) {
            event.preventDefault();
            $("html, body")
                .stop()
                .animate(
                    {
                        scrollTop: target.offset().top - 80,
                    },
                    800
                );
        }
    });

    // Botão voltar ao topo
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $("#back-to-top").addClass("visible");
        } else {
            $("#back-to-top").removeClass("visible");
        }
    });

    $("#back-to-top").click(function (e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, 800);
    });

    // Inicializar mapa
    function initMap() {
        // Coordenadas do Centro de Eventos precisas
        const location = { lat: -23.3721, lng: -50.8438 };

        // Opções do mapa otimizadas para mobile e desktop
        const mapOptions = {
            center: location,
            zoom: 15,
            mapTypeControl: false,
            fullscreenControl: true,
            streetViewControl: false,
            scrollwheel: false,
            styles: [
                {
                    featureType: "administrative",
                    elementType: "labels.text.fill",
                    stylers: [{ color: "#444444" }],
                },
                {
                    featureType: "landscape",
                    elementType: "all",
                    stylers: [{ color: "#f2f2f2" }],
                },
                {
                    featureType: "poi",
                    elementType: "all",
                    stylers: [{ visibility: "off" }],
                },
                {
                    featureType: "road",
                    elementType: "all",
                    stylers: [{ saturation: -100 }, { lightness: 45 }],
                },
                {
                    featureType: "road.highway",
                    elementType: "all",
                    stylers: [{ visibility: "simplified" }],
                },
                {
                    featureType: "road.arterial",
                    elementType: "labels.icon",
                    stylers: [{ visibility: "off" }],
                },
                {
                    featureType: "transit",
                    elementType: "all",
                    stylers: [{ visibility: "off" }],
                },
                {
                    featureType: "water",
                    elementType: "all",
                    stylers: [{ color: "#a40202" }, { visibility: "on" }],
                },
            ],
        };

        // Verifica se o elemento existe antes de inicializar
        const mapElement = document.getElementById("map");
        if (!mapElement) return;

        const map = new google.maps.Map(mapElement, mapOptions);

        // Marcador com animação suave
        const marker = new google.maps.Marker({
            position: location,
            map: map,
            title: "Centro de Eventos Toyosaburo Ikeda",
            animation: google.maps.Animation.DROP,
            icon: {
                url: "/assets/images/icon/map-marker.png",
                scaledSize: new google.maps.Size(40, 40),
            },
        });

        // Informação do local com design melhorado
        const infoContent = `
            <div class="map-info-window">
                <h5>Centro de Eventos Toyosaburo Ikeda</h5>
                <p>Avenida Paul Harris, S/N<br>Assaí - PR, 86220-000</p>
                <a href="https://maps.app.goo.gl/VMiKEB5NxdVM8ni6A" target="_blank" class="btn-directions">
                    <i class="fa fa-directions"></i> Como Chegar
                </a>
            </div>
        `;

        const infowindow = new google.maps.InfoWindow({
            content: infoContent,
            maxWidth: 300,
        });

        // Abre a janela de informações ao clicar no marcador
        marker.addListener("click", () => {
            infowindow.open(map, marker);
        });

        // Centraliza o mapa ao redimensionar a janela
        google.maps.event.addDomListener(window, "resize", function () {
            map.setCenter(location);
        });
    }

    // Carrega o mapa de forma assíncrona para melhor performance
    document.addEventListener("DOMContentLoaded", function () {
        // Carrega o mapa apenas quando visível no viewport para economizar recursos
        const mapObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        setTimeout(initMap, 500);
                        mapObserver.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.1 }
        );

        const mapContainer = document.querySelector(".map-container");
        if (mapContainer) {
            mapObserver.observe(mapContainer);
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // Menu hamburger com melhor acessibilidade
    const navbarToggler = document.querySelector(".navbar-toggler");
    const navbarActions = document.querySelector(".navbar-actions");

    navbarToggler.addEventListener("click", function () {
        this.classList.toggle("active");
        navbarActions.classList.toggle("show");

        // Melhora a acessibilidade
        const expanded = this.classList.contains("active");
        this.setAttribute("aria-expanded", expanded);
        navbarActions.setAttribute("aria-hidden", !expanded);
    });

    // Ajusta altura da navbar no scroll com otimização de performance
    let lastScrollTop = 0;
    const navbar = document.querySelector(".navbar.main-nav");

    window.addEventListener(
        "scroll",
        function () {
            const scrollTop =
                window.pageYOffset || document.documentElement.scrollTop;

            // Verifica a direção do scroll para melhor UX
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                // Scroll para baixo
                navbar.classList.add("navbar-compact");
            } else {
                // Scroll para cima
                navbar.classList.remove("navbar-compact");
            }

            // Efeito de transparência ao topo
            if (scrollTop < 50) {
                navbar.classList.add("navbar-top");
            } else {
                navbar.classList.remove("navbar-top");
            }

            lastScrollTop = scrollTop;
        },
        { passive: true }
    ); // Melhoria de performance
});

$(document).ready(function () {
    // Sistema de filtragem da galeria otimizado
    $(".gallery-filter").on("click", function () {
        const filter = $(this).data("filter");

        // Atualiza classe ativa
        $(".gallery-filter").removeClass("active");
        $(this).addClass("active");

        // Anima os itens com fade para melhor UX
        if (filter === "all") {
            $(".gallery-item").fadeIn(300);
        } else {
            $(".gallery-item").hide();
            $('.gallery-item[data-category="' + filter + '"]').fadeIn(300);
        }

        // Recalcula o layout para evitar quebras visuais
        setTimeout(function () {
            window.dispatchEvent(new Event("resize"));
        }, 350);

        return false;
    });

    // Inicialização do lightbox para imagens com lazy loading
    $(".gallery-item").magnificPopup({
        type: "image",
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            tPrev: "Anterior",
            tNext: "Próxima",
            tCounter: "%curr% de %total%",
        },
        image: {
            titleSrc: function (item) {
                return item.el.attr("title");
            },
        },
    });
});

// Animações de entrada dos elementos ao scroll
document.addEventListener("DOMContentLoaded", function () {
    // Configura o observador de interseção para animações
    const animateObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("animated");
                    animateObserver.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.1, rootMargin: "0px 0px -100px 0px" }
    );

    // Seleciona todos os elementos para animar
    const animateElements = document.querySelectorAll(
        ".fade-in, .fade-up, .fade-right, .fade-left"
    );
    animateElements.forEach((element) => {
        animateObserver.observe(element);
    });

    // Lazy loading para imagens
    const lazyObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    const src = img.getAttribute("data-src");

                    if (src) {
                        img.src = src;
                        img.removeAttribute("data-src");
                        img.classList.add("loaded");
                        lazyObserver.unobserve(img);
                    }
                }
            });
        },
        { threshold: 0.1, rootMargin: "200px" }
    );

    // Aplica lazy loading em todas as imagens com data-src
    document.querySelectorAll("img[data-src]").forEach((img) => {
        lazyObserver.observe(img);
    });
});

// Função para garantir que o código só executa quando todos os elementos estiverem carregados
document.addEventListener("DOMContentLoaded", function () {
    // Inicializar AOS apenas se estiver disponível
    if (typeof AOS !== "undefined") {
        AOS.init({
            duration: 800,
            once: true,
        });
    }

    // Verificar se há elementos com data-aos
    const aosElements = document.querySelectorAll("[data-aos]");
    if (aosElements.length > 0 && typeof AOS === "undefined") {
        console.warn(
            "AOS não carregado, mas existem elementos com atributos data-aos"
        );
    }

    // Reinicializar componentes específicos
    if (typeof $ !== "undefined") {
        // Reinicializar as abas da programação
        $(".schedule-tab").on("click", function () {
            $(".schedule-tab").removeClass("active");
            $(this).addClass("active");

            const tabId = $(this).data("day");
            $(".schedule-day").removeClass("active");
            $("#" + tabId).addClass("active");
        });

        // Reinicializar contagem regressiva
        updateCountdown();
        setInterval(updateCountdown, 1000);
    }
});

// Função de verificação geral se jQuery está disponível
function checkJQuery() {
    if (typeof $ === "undefined") {
        console.error(
            "jQuery não está carregado. Verifique a inclusão do script."
        );
        return false;
    }
    return true;
}

// Verificar se o contador regressivo existe
function updateCountdown() {
    if (!checkJQuery()) return;

    if (
        $("#countdown-days").length &&
        $("#countdown-hours").length &&
        $("#countdown-minutes").length &&
        $("#countdown-seconds").length
    ) {
        const eventDate = new Date("June 6, 2025 09:00:00").getTime();
        const now = new Date().getTime();
        const distance = eventDate - now;

        // Se a data já passou, mostra zeros
        if (distance < 0) {
            $("#countdown-days").text("00");
            $("#countdown-hours").text("00");
            $("#countdown-minutes").text("00");
            $("#countdown-seconds").text("00");
            return;
        }

        // Cálculo de tempo otimizado
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Atualizar os elementos com formatação padronizada
        $("#countdown-days").text(days < 10 ? "0" + days : days);
        $("#countdown-hours").text(hours < 10 ? "0" + hours : hours);
        $("#countdown-minutes").text(minutes < 10 ? "0" + minutes : minutes);
        $("#countdown-seconds").text(seconds < 10 ? "0" + seconds : seconds);
    }
}

// Adicione o seguinte código ao final do arquivo landing.js

// Filtro para a programação do evento
$(document).ready(function () {
    // Filtrar itens da programação
    $(".filter-btn").on("click", function () {
        const filter = $(this).data("filter");

        // Atualiza classe ativa
        $(".filter-btn").removeClass("active");
        $(this).addClass("active");

        if (filter === "all") {
            $(".filter-item").fadeIn(300);
        } else {
            $(".filter-item").hide();
            $(".filter-item." + filter).fadeIn(300);
        }

        return false;
    });
});
