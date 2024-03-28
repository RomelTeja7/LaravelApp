@foreach ($data as $item)
<div class="modal fade" id="updateModalToggle{{$item->Id}}" aria-hidden="true" aria-labelledby="updateModalToggleLabel{{$item->Id}}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalToggleLabel{{$item->Id}}">Update</h5> 
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route("crud.update")}}" method="POST">
                    @csrf
                    <input type="hidden" name="Id" value="{{ $item->Id }}">
                    <div class="mb-3">
                        <label for="NombreProyecto" class="col-form-label">Nombre Proyecto:</label>
                        <input type="text" class="form-control" name="NombreProyecto" value="{{$item->NombreProyecto}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="FuenteFondos" class="col-form-label">Fuente Fondos:</label>
                        <input type="text" class="form-control" name="FuenteFondos" value="{{$item->FuenteFondos}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="MontoPlanificado" class="col-form-label">Monto Planificado:</label>
                        <input type="number" step="0.01" min="0" class="form-control" name="MontoPlanificado" value="{{$item->MontoPlanificado}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="MontoPatrocinado" class="col-form-label">Monto Patrocinado:</label>
                        <input type="number" step="0.01" min="0" class="form-control" name="MontoPatrocinado" value="{{$item->MontoPatrocinado}}" required>
                    </div>
                    <div class="mb-3">
                        <label for="MontoFondosPropios" class="col-form-label">Monto Fondos Propios:</label>
                        <input type="number" step="0.01" min="0" class="form-control" name="MontoFondosPropios" value="{{$item->MontoFondosPropios}}" required>
                    </div>
                    <div class="modal-footer">
                        <button  class="btn btn-warning" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach