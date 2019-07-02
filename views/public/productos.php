<?php
require_once('../../core/helpers/public.php');
Publico::headerTemplate('Inicio');
?>

<!-- Contenido principal: categorías, productos por categoría y detalles del producto -->
<div class="container">
    <br>
    <h3>PRODUCTOS</h3>
    <div class="row" id="catalogo">
    </div>
</div>
<?php
Publico::footerTemplate('catalogo.js');
?>