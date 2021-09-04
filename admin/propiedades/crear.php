<?php
//base de datos
require '../../includes/config/database.php';
$db = conectarDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   echo "<pre>";
   var_dump($_POST);
   echo "</pre>";

   $titulo = $_POST['titulo'];
}


require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
   <h1>Crear</h1>

   <a href="/admin" class="boton boton-verde">Volver</a>

   <form class="formulario" method="POST">
      <fieldset>
         <legend>Información General</legend>

         <label for="titulo">Titulo:</label>
         <input type="text" name="titulo" id="titulo" placeholder="Propiedad">

         <label for="precio">Precio:</label>
         <input type="text" name="precio" id="precio" placeholder="Precio propiedad">

         <label for="imagen">Imagen:</label>
         <input type="file" name="imagen" id="imagen">

         <label for="descripcion">Descripción:</label>
         <textarea id="descripcion"></textarea>
      </fieldset>

      <fieldset>
         <legend>Información Propiedad</legend>

         <label for="habitaciones">Habitaciones:</label>
         <input type="number" name="habitaciones" id="habitaciones" placeholder="Ej: 3" min="1" max="9">

         <label for="wc">Baños:</label>
         <input type="number" name="wc" id="wc" placeholder="Ej: 3" min="1" max="9">


         <label for="estacionamiento">Estacionamiento:</label>
         <input type="number" name="estacionamiento" id="estacionamiento" placeholder="Ej: 3" min="1" max="9">
      </fieldset>

      <fieldset>
         <legend>Vendedores</legend>

         <select name="vendor">
            <option value="1">Eber</option>
            <option value="2">Karen</option>
         </select>
      </fieldset>

      <input type="submit" value="Crear propiedad" class="boton boton-verde">

   </form>
</main>

<?php incluirTemplate('footer'); ?>

</body>

</html>
