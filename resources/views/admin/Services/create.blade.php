<!-- Strat Create Services -->
<div class="modal fade" id="Add_Services" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title h5" id="exampleModalLabel">{{__('admin/services.Add_Services')}}</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('Services.store')}}" method="post">
                    @csrf

                    <div class="row">

                        <div class="col-6">
                            <label for="">{{__('admin/services.Ar_Services')}}</label>
                            <input type="text" name="Name_Services_ar" placeholder="{{__('admin/services.Ar_Services')}}" class="form-control" required>
                        </div>

                        <div class="col-6">
                            <label for="">{{__('admin/services.En_services')}}</label>
                            <input type="text" name="Name_Services_en" placeholder="{{__('admin/services.En_services')}}" class="form-control" required>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-12">
                            <label for="">{{__('admin/services.Notes_services')}}</label>
                            <textarea name="Notes_Services" id="" placeholder="{{__('admin/services.Notes_services')}}" cols="30" class="form-control" rows="5"></textarea>
                        </div>

                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('admin/services.Close')}}</button>
                        <button class="btn btn-primary">{{__('admin/services.Save')}}</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Create Services -->