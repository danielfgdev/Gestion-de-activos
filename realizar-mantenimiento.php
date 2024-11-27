<?php include('header.php'); ?>

<div class="main-container">
    <!-- Sidebar -->
    <div class="sidebar">
        <?php include('sidebar.php'); ?>
    </div>

    <!-- Contenido principal -->
    <div class="content">
        <h2>Realizar mantenimiento</h2>

        <form action="procesar-realizar-mantenimiento.php" method="POST" enctype="multipart/form-data" class="formularios">
            <div class="row">
                <!-- Selección del Activo -->
                <div class="col-12 col-md-6 mb-3">
                    <label for="activo_id" class="form-label">Activo</label>
                    <select id="activo_id" name="activo_id" class="form-select" required>
                        <option value="">Selecciona un activo</option>
                        <!-- Aquí se podrían listar los activos obtenidos desde la base de datos -->
                    </select>
                </div>

                <!-- Tipo de Mantenimiento -->
                <div class="col-12 col-md-6 mb-3">
                    <label for="tipo_mantenimiento" class="form-label">Tipo de mantenimiento</label>
                    <select id="tipo_mantenimiento" name="tipo_mantenimiento" class="form-select" required>
                        <option value="preventivo">Preventivo</option>
                        <option value="correctivo">Correctivo</option>
                        <option value="predictivo">Predictivo</option>
                    </select>
                </div>

                <!-- Duración del Mantenimiento -->
                <div class="col-12 col-md-6 mb-3">
                    <label for="duracion_mantenimiento" class="form-label">Duración mantenimiento</label>
                    <input type="text" id="duracion_mantenimiento" name="duracion_mantenimiento" class="form-control" pattern="\d*" inputmode="numeric" required placeholder="Ejemplo: 2.5 (en horas)">
                </div>

                <!-- Fecha del Mantenimiento -->
                <div class="col-12 col-md-6 mb-3">
                    <label for="fecha_mantenimiento" class="form-label">Fecha del proximo mantenimiento</label>
                    <input type="date" id="fecha_mantenimiento" name="fecha_mantenimiento" class="form-control" required>
                </div>

                <!-- Descripción -->
                <div class="col-12 mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="3" placeholder="Descripción del mantenimiento" required></textarea>
                </div>


                <!-- Responsable realizar mantenimiento -->
                <div class="col-12 col-md-6 mb-3">
                    <label for="responsable_mantenimiento" class="form-label">Responsable del mantenimiento</label>
                    <input type="text" id="responsable_mantenimiento" name="responsable_mantenimiento" class="form-control">
                </div>

                <!-- Subir Imagen Destacable -->
                <div class="col-12 mb-3">
                    <label for="imagen_destacable" class="form-label">Imagen destacable (opcional)</label>
                    <input type="file" id="imagen_destacable" name="imagen_destacable[]" class="form-control" accept="image/*" multiple>
                </div>

                <!-- Botón de Envío -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Terminar mantenimiento</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include('footer.php'); ?>