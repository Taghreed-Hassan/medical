<!-- Deleted Servies -->
<div class="modal fade" id="DeletedServies{{$xxx->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title h5" id="exampleModalLabel">{{__('admin/services.Deleted')}}</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('Services.destroy','test')}}" method="post">
                    @method('DELETE')
                    @csrf

                    <p class="h5 text-danger">{{trans('admin/services.Title_Deleted')}}</p>
                    <input type="hidden" name="id" value="{{$xxx->id}}">


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('admin/services.Close')}}</button>
                        <button class="btn btn-primary">{{__('admin/services.Save_Deleted')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>