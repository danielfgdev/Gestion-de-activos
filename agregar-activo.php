<?php include('header.php'); ?>

<div class="main-container">
    <!-- Sidebar -->
    <div class="sidebar">
        <?php include('sidebar.php'); ?>
    </div>

    <!-- Contenido principal -->
    <div class="content">
        <h2>Agregar Nuevo Activo</h2>

        <form action="procesar-agregar-activo.php" method="POST" enctype="multipart/form-data" class="formularios">
            <div class="row">
                <!-- Nombre del Activo -->
                <div class="col-12 col-md-6 mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                </div>

                <!-- Tipo de Activo -->
                <div class="col-12 col-md-6 mb-3">
                    <label for="tipo" class="form-label">Tipo</label>
                    <select id="tipo" name="tipo" class="form-select" required>
                        <option value="electronico">Electrónico</option>
                        <option value="mobiliario">Mobiliario</option>
                        <option value="herramienta">Herramienta</option>
                        <option value="vehiculo">Vehículo</option>
                        <option value="maquinaria">Maquinaria</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>

                <!-- Fabricante -->
                <div class="col-12 col-md-6 mb-3">
                    <label for="fabricante" class="form-label">Fabricante</label>
                    <input type="text" id="fabricante" name="fabricante" class="form-control" required>
                </div>

                <!-- Proveedor -->
                <div class="col-12 col-md-6 mb-3">
                    <label for="proveedor" class="form-label">Proveedor</label>
                    <input type="text" id="proveedor" name="proveedor" class="form-control" required>
                </div>

                <!-- Referencia -->
                <div class="col-12 col-md-6 mb-3">
                    <label for="referencia" class="form-label">Referencia</label>
                    <input type="text" id="referencia" name="referencia" class="form-control" required>
                </div>

                <!-- Numero de serie -->
                <div class="col-12 col-md-6 mb-3">
                    <label for="numero_serie" class="form-label">Número de Serie</label>
                    <input type="text" id="numero_serie" name="numero_serie" class="form-control" required>
                </div>

                <!-- Descripción y Año de Fabricación -->
                <div class="col-12 mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="3" required></textarea>
                </div>

                <div class="col-12 col-md-6 mb-3">
                    <label for="ano_fabricacion" class="form-label">Año de Fabricación</label>
                    <input type="text" id="ano_fabricacion" name="ano_fabricacion" class="form-control" pattern="\d*" inputmode="numeric" required>
                </div>

                <!-- Duración de Garantía y Estado -->
                <div class="col-12 col-md-6 mb-3">
                    <label for="duracion_garantia" class="form-label">Duración de Garantía (años)</label>
                    <input type="text" id="duracion_garantia" name="duracion_garantia" class="form-control" pattern="\d*" inputmode="numeric" required>
                </div>

                <div class="col-12 col-md-6 mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <select id="estado" name="estado" class="form-select" required>
                        <option value="nuevo">Nuevo</option>
                        <option value="usado">Usado</option>
                        <option value="reparado">Reparado</option>
                    </select>
                </div>

                <!-- Ubicación y Fecha de Compra -->
                <div class="col-12 col-md-6 mb-3">
                    <label for="ubicacion" class="form-label">Ubicación</label>
                    <input type="text" id="ubicacion" name="ubicacion" class="form-control" required>
                </div>

                <div class="col-12 col-md-6 mb-3">
                    <label for="fecha_compra" class="form-label">Fecha de Compra</label>
                    <input type="date" id="fecha_compra" name="fecha_compra" class="form-control">
                </div>

                <!-- Costo y Método de Pago -->
                <div class="col-12 col-md-6 mb-3">
                    <label for="costo" class="form-label">Costo</label>
                    <input type="number" id="costo" name="costo" class="form-control" pattern="\d*" inputmode="numeric" required>
                </div>

                <div class="col-12 col-md-6 mb-3">
                    <label for="metodo_pago" class="form-label">Método de Pago</label>
                    <select id="metodo_pago" name="metodo_pago" class="form-select" required>
                        <option value="transferencia">Transferencia</option>
                        <option value="tarjeta_credito">Tarjeta de Crédito</option>
                        <option value="efectivo">Efectivo</option>
                        <option value="cheque">Cheque</option>
                    </select>
                </div>



                <!-- Imagen -->
                <div class="col-12 mb-3">
                    <label for="imagen" class="form-label">Imagen</label>
                    <input type="file" id="imagen" name="imagen" class="form-control" accept="image/*">
                </div>

                <!-- Botón de Envío -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Guardar Activo</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include('footer.php'); ?>