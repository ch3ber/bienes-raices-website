<?php 
   require 'includes/funciones.php';
   incluirTemplate('header');
?>

   <main class="contenedor seccion">
      <h1>Conoce Sobre Nosotros</h1>

      <div class="contenido-nosotros">
         <div class="imagen">
            <picture>
               <source srcset="build/img/nosotros.webp" type="image/webp">
               <source srcset="build/img/nosotros.jpg" type="image/jpeg">
               <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
            </picture>
         </div>

         <div class="texto-nosotros">
            <blockquote>
               25 Años de experiencia 
            </blockquote>
            <p>
               Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
               diam nonumy eirmod tempor invidunt ut labore et dolore magna
               aliquyam erat, sed diam voluptua. At vero eos et accusam et
               justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
               takimata sanctus est Lorem ipsum dolor sit amet.
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero,
               harum. Dicta dolore quis nulla perspiciatis quasi autem,
               repellendus itaque iusto quo eligendi eaque quisquam, inventore
               hic saepe quam, quas suscipit?
            </p>
            <p>
               Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
               diam nonumy eirmod tempor invidunt ut labore et dolore magna
               aliquyam erat, sed diam voluptua. At vero eos et accusam et
               justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
               takimata sanctus est Lorem ipsum dolor sit amet.
            </p>
         </div>
      </div>
   </main>

   <section class="conenedor seccion">
      <h1>Mas sobre nosotros</h1>

      <div class="iconos-nosotros">
         <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Excepturi libero distinctio sunt? Vero impedit atque, at repellendus facilis, aspernatur, laborum eum quo odit adipisci similique ipsa fugiat dignissimos distinctio architecto!</p>
         </div>
         <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
            <h3>Precio</h3>
            <p>Excepturi libero distinctio sunt? Vero impedit atque, at repellendus facilis, aspernatur, laborum eum quo odit adipisci similique ipsa fugiat dignissimos distinctio architecto!</p>
         </div>
         <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
            <h3>Tiempo</h3>
            <p>Excepturi libero distinctio sunt? Vero impedit atque, at repellendus facilis, aspernatur, laborum eum quo odit adipisci similique ipsa fugiat dignissimos distinctio architecto!</p>
         </div>
      </div>
   </section>

   <?php incluirTemplate('footer'); ?>
   
   <script src="build/js/bundle.min.js"></script>
</body>
</html>
