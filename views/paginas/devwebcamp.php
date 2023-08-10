<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia más importante de Latinoamérica</p>

    <div class="devwebcamp__grid">
        <div <?php aos_animacion(); ?> class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen DevWebCamp">
            </picture>
        </div>

        <div <?php aos_animacion(); ?> class="devwebcamp__contenido">
            <p  class="devwebcamp__texto">DevWebCamp es una plataforma educativa enfocada en el desarrollo web y 
                tecnologías de vanguardia. Nuestro objetivo es brindar a los participantes una experiencia 
                enriquecedora a través de conferencias y workshops impartidos por expertos de la industria. 
                </p>
            <p class="devwebcamp__texto">Aprende las últimas tendencias en diseño, programación y herramientas para 
                crear sitios web y aplicaciones innovadoras. Únete a nuestra comunidad de entusiastas del 
                desarrollo web y lleva tus habilidades al siguiente nivel.</p>

        </div>
    </div>
</main>