<h1 class="nombre-pagina">Crear cita</h1>
<p class="descripcion-pagina">Elige tu servicio para anotar tus datos</p>

<?php
    include_once __DIR__ . '/../templates/barra.php';
?>

<div id="app">
    <nav class="tabs">
        <button class="actual" type="button" data-paso="1">Servicios</button>
        <button type="button" data-paso="2">Cita</button>
        <button type="button" data-paso="3">Resumen</button>
    </nav>

    <div id="paso-1" class="seccion">
        <h2>Servicios</h2>
        <p class="text-center">Elige tus servicios a continuación</p>
        <div id="servicios" class="listado-servicios"></div>
    </div>
    <div id="paso-2" class="seccion">
        <h2>Tus datos y cita</h2>
        <p class="text-center">Coloca tus datos y fecha de la cita</p>

        <form class="formulario">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input
                    id="nombre"
                    type="text"
                    placeholder="Escribe tu nombre"
                    value="<?php echo $nombre; ?>"
                    disabled
                />
            </div>

            <div class="campo">
                <label for="fecha">Fecha</label>
                <input
                    id="fecha"
                    type="date"
                    min="<?php echo date ('Y-m-d', strtotime('+1 day')); ?>"
                />
            </div>

            <div class="campo">
                <label for="hora">Hora</label>
                <input
                    id="hora"
                    type="time"
                />
            </div>
            <input type="hidden" id="id" value="<?php echo $id; ?>">

        </form>

    </div>
    <div id="paso-3" class="seccion contenido-resumen">
        <h2>Resumen</h2>
        <p class="text-center">Verifica que tu información sea la correcta</p>
    </div>

    <div class="paginacion">
        <button id="anterior" class="boton">
        &laquo; Anterior
        </button>

        <button id="siguiente" class="boton"> 
        Siguiente &raquo;
        </button>

    </div>

</div>

<?php
    $script = "
        <link href='https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css' rel='stylesheet'>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js'></script>
        <script src='build/js/app.js'></script>
    ";  
?>
