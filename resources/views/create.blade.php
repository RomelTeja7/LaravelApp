<div class="modal fade" id="createModalToggle" aria-hidden="true" aria-labelledby="createModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalToggleLabel">Create</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route("crud.create")}} " method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="NombreProyecto" class="col-form-label">Nombre Proyecto:</label>
                        <input type="text" class="form-control" name="NombreProyecto" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="FuenteFondos" class="col-form-label">Fuente Fondos:</label>
                        <input type="text" class="form-control" name="FuenteFondos" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="MontoPlanificado" class="col-form-label">Monto Planificado:</label>
                        <input type="number" class="form-control" name="MontoPlanificado" step="0.01" min="0" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="MontoPatrocinado" class="col-form-label">Monto Patrocinado:</label>
                        <input type="number" class="form-control" name="MontoPatrocinado" step="0.01" min="0" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="MontoFondosPropios" class="col-form-label">Monto Fondos Propios:</label>
                        <input type="number" class="form-control" name="MontoFondosPropios" step="0.01" min="0" required></input>
                    </div>
                    <div class="modal-footer">
                        <button  class="btn btn-success" type="submit">Create</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>