<div class="contenerorPrincipal">

    <form method="post" action="index.php">
        <div class="contenedor" <?php echo $mostrarBoton ? 'style="display: none;"' : ''; ?>>
            <div class="box1">
                <input type="text" name="nombre" id="producto" placeholder="Producto" required>
            </div>
            <div class="box1">
                <input type="number" name="valor" id="precio" placeholder="Precio" required>
            </div>
            <input type="hidden" name="insert" value="INSERT">
            <input type="submit" value="Guardar">
        </div>
    </form>

    <form method="post" <?php echo $mostrarBoton ? '' : 'style="display: none;"'; ?>>
        <div class="contenedor">
            <button type="submit" name="CrearTabla" value="CREAR_TABLA">Crear Tabla</button>
        </div>
    </form>

    <div class="contenedor2">
        <form method="post" action="index.php">
            <div class="box1">
                <input type="number" name="idEliminar" placeholder="ID a eliminar" required>
            </div>
            <input type="hidden" name="delete" value="ELIMINAR">
            <input type="submit" value="Eliminar">
        </form>

        <form method="post" action="index.php">
            <div class="box2">
                <input type="number" name="idEliminar" id="idEliminar" placeholder="ID a modificar" required>
            </div>
            <div class="box2">
                <input type="text" name="prodMod" id="prodMod" placeholder="Nuevo nombre" required>
            </div>
            <div class="box2">
                <input type="number" name="precioMod" id="precioMod" placeholder="Nuevo precio" required>
            </div>
            <input type="hidden" name="update" value="MODIFICAR">
            <input type="submit" value="Modificar">
        </form>
    </div>

</div>