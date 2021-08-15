<?php include 'includes/header.php' ?>

   <main class="contenedor seccion">
      <h1>Contacto</h1>

      <picture>
         <source srcset="build/img/destacada2.webp" type="image/webp">
         <source srcset="build/img/destacada2.jpg" type="image/jpeg">
         <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen contacto"/>
      </picture>

      <h2>Llene el formulario de contacto</h2>

      <form action="#" class="formulario">
         <fieldset>
            <legend>Información personal</legend>

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" placeholder="Tu nombre">

            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Tu email">

            <label for="telefono">Telefono</label>
            <input type="tel" id="telefono" placeholder="Tu telefono">

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje"></textarea>
         </fieldset>

         <fieldset>
            <legend>Información sobre la propiedad</legend>

            <label for="opciones">Vende o compra:</label>
            <select id="opciones">
               <option value="" disabled selected>-- Seleccione --</option>
               <option value="Compra">Compra</option>
               <option value="Venta">Venta</option>
            </select>

            <label for="presupuesto">Precio o Presupuesto</label>
            <input type="number" id="presupuesto" placeholder="Tu precio o presupuesto">
         </fieldset>

         <fieldset>
            <legend>Información sobre la propiedad</legend>

            <p>Como desea ser contactado</p>

            <div class="forma-contacto">
               <label for="contactar-telefono">Telefono</label>
               <input name="contacto" type="radio" id="contactar-telefono" value="telefono"/>
               
               <label for="contactar-email">Email</label>
               <input name="contacto" type="radio" id="contactar-email" value="email"/>
            </div>

            <p>Si eligio telefono, elija la hora y fecha para ser contactado</p>

            <label for="fecha">Fecha:</label>
            <input type="fecha" id="fecha">

            <label for="hora">Hora:</label>
            <input type="time" id="hora" min="09:00" max="18:00">
         </fieldset>

         <input type="submit" value="Enviar" class="boton-verde">
      </form>
   </main>

   <?php include 'includes/footer.php' ?>
   
   <script src="build/js/bundle.min.js"></script>
</body>
</html>
