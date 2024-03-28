@foreach ($data as $item)
<div class="modal fade" id="deleteModalToggle{{$item->Id}}" aria-hidden="true" aria-labelledby="deleteModalToggleLabel{{$item->Id}}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalToggleLabel{{$item->Id}}">Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Do you want to delete the project {{$item->NombreProyecto}} ?
            </div>
            <div class="modal-footer">
                <a href="{{route("crud.delete",$item->Id)}}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>
@endforeach