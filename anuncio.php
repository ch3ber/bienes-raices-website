<?php 
   require 'includes/funciones.php';
   incluirTemplate('header');
?>

   <main class="contenedor seccion contenido-centrado">
      <h1>Casa en venta frente al bosque</h1>

      <picture>
         <source srcset="build/img/destacada.webp" type="image/webp">
         <source srcset="build/img/destacada.jpg" type="image/jpeg">
         <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
      </picture>

      <div class="resumen-propiedad">
         <p class="precio">$3,000,000</p>
         <ul class="iconos-caracteristicas">
            <li>
               <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
               <p>3</p>
            </li>
            <li>
               <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
               <p>3</p>
            </li>
            <li>
               <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
               <p>4</p>
            </li>
         </ul>

         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi unde
            est iure necessitatibus eius voluptates earum molestiae quis odio.
            Obcaecati perspiciatis odit rerum id omnis, ex praesentium! Porro,
            placeat accusantium. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Repudiandae placeat natus quo, fugit itaque pariatur
            exercitationem adipisci, blanditiis cumque nobis iusto. Libero, ipsa nisi
            quasi obcaecati deserunt architecto quisquam consectetur.</p>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
            officiis, ad iste, est laudantium enim quisquam esse rerum hic, ut ea
            perspiciatis? Ad dicta repellat recusandae! Perspiciatis voluptates dolor
            odit!</p>
      </div>
   </main>

   <?php incluirTemplate('footer'); ?>
   
</body>
</html>
