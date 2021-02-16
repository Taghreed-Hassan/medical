<!-- Strat Edit Servies -->
<div class="modal fade" id="EditServies{{$xxx->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title h5" id="exampleModalLabel">{{__('admin/services.Modal_Edit')}}</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('Services.update','test')}}" method="post">
                    @method('PATCH')
                    @csrf

                    <div class="row">

                        <div class="col-6">
                            <label for="">{{__('admin/services.Ar_Services')}}</label>
                            <input type="text" name="Name_Services_ar" class="form-control" value="{{$xxx->getTranslation('Name_Services','ar')}}">
                        </div>

                        <div class="col-6">
                            <label for="">{{__('admin/services.En_services')}}</label>
                            <input type="text" name="Name_Services_en" class="form-control" value="{{$xxx->getTranslation('Name_Services','en')}}">
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-12">
                            <label for="">{{__('admin/services.Notes_services')}}</label>
                            <textarea name="Notes_Services" id="" cols="30" class="form-control" rows="5">
                            {{$xxx->Notes_Services}}
                            </textarea>
                        </div>

                    </div>

                    <input type="hidden" name="id" value="{{$xxx->id}}">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('admin/services.Close')}}</button>
                        <button class="btn btn-primary">{{__('admin/services.Save_edit')}}</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- End Edit Servies -->