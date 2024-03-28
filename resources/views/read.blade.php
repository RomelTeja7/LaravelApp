@foreach ($data as $item)
<div class="modal fade" id="readModalToggle{{$item->Id}}" aria-hidden="true" aria-labelledby="readModalToggleLabel{{$item->Id}}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="readModalToggleLabel{{$item->Id}}">Read</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="Id" class="col-form-label">Id:</label>
                        <output type="text" class="form-control">{{$item->Id}}</output>
                    </div>
                    <div class="mb-3">
                        <label for="NombreProyecto" class="col-form-label">Nombre Proyecto:</label>
                        <output type="text" class="form-control">{{$item->NombreProyecto}}</output>
                    </div>
                    <div class="mb-3">
                        <label for="FuenteFondos" class="col-form-label">Fuente Fondos:</label>
                        <output type="text" class="form-control">{{$item->FuenteFondos}}</output>
                    </div>
                    <div class="mb-3">
                        <label for="MontoPlanificado" class="col-form-label">Monto Planificado:</label>
                        <output type="text" class="form-control">{{$item->MontoPlanificado}}</output>
                    </div>
                    <div class="mb-3">
                        <label for="MontoPatrocinado" class="col-form-label">Monto Patrocinado:</label>
                        <output type="text" class="form-control">{{$item->MontoPatrocinado}}</output>
                    </div>
                    <div class="mb-3">
                        <label for="MontoFondosPropios" class="col-form-label">Monto Fondos Propios:</label>
                        <output type="text" class="form-control">{{$item->MontoFondosPropios}}</output>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endforeach