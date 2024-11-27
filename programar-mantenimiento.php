<?php include('header.php'); ?>

<div class="main-container">
    <!-- Sidebar -->
    <div class="sidebar">
        <?php include('sidebar.php'); ?>
    </div>

    <!-- Contenido principal -->
    <div class="content">
        <h2>Programar mantenimiento</h2>

        <form action="procesar-programar-mantenimiento.php" method="POST" enctype="multipart/form-data" class="formularios">
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

                <!-- Duración estimada del Mantenimiento -->
                <div class="col-12 col-md-6 mb-3">
                    <label for="duracion_est_mantenimiento" class="form-label">Duración estimada</label>
                    <input type="text" id="duracion_est_mantenimiento" name="duracion_est_mantenimiento" class="form-control" pattern="\d*" inputmode="numeric" required placeholder="Ejemplo: 2.5 (en horas)">
                </div>

                <!-- Fecha del proximo Mantenimiento -->
                <div class="col-12 col-md-6 mb-3">
                    <label for="fecha_prox_mantenimiento" class="form-label">Fecha del proximo mantenimiento</label>
                    <input type="date" id="fecha_prox_mantenimiento" name="fecha_prox_mantenimiento" class="form-control" required>
                </div>

                <!-- Descripción -->
                <div class="col-12 mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="3" placeholder="Descripción del mantenimiento" required></textarea>
                </div>


                <!-- Responsable realizar mantenimiento -->
                <div class="col-12 col-md-6 mb-3">
                    <label for="responsable_mantenimiento" class="form-label">Responsable del mantenimiento</label>
                    <input type="text" id="responsable_mantenimiento" name="responsable_mantenimiento" class="form-control" placeholder="Opcional">
                </div>

                <!-- Responsable programar mantenimiento -->
                <div class="col-12 col-md-6 mb-3">
                    <label for="responsable_crear_mantenimiento" class="form-label">Responsable crear mantenimiento</label>
                    <input type="text" id="responsable_crear_mantenimiento" name="responsable_crear_mantenimiento" class="form-control">
                </div>

                <!-- Subir Imagen Destacable -->
                <div class="col-12 mb-3">
                    <label for="imagen_destacable" class="form-label">Imagen destacable (opcional)</label>
                    <input type="file" id="imagen_destacable" name="imagen_destacable[]" class="form-control" accept="image/*" multiple>
                </div>

                <!-- Botón de Envío -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Programar mantenimiento</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include('footer.php'); ?>