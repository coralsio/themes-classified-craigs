<div class="modal fade" id="ProductRefertModal" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            {!! CoralsForm::openForm(null,['url' => url('products/'.$product->hashed_id.'/refer'),'method'=>'POST', 'class'=>'ajax-form','id'=>'refer-form','data-page_action'=>"closeModal"]) !!}

            <div class="modal-header">
                <h5 class="modal-title">Refer {{$product->name}} Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! CoralsForm::text('name','corals-classified-craigs::labels.partial.component.refer.name',true, user() ? user()->name : "", ['class'=>'small']) !!}
                {!! CoralsForm::text('referrer_email','corals-classified-craigs::labels.partial.component.refer.friend_email',true,  "", ['class'=>'small']) !!}
                {!! CoralsForm::text('referrer_name','corals-classified-craigs::labels.partial.component.refer.friend_name',true,  "", ['class'=>'small']) !!}
                {!! CoralsForm::textarea('refer_body','corals-classified-craigs::labels.partial.component.refer.body',true, '', ['rows'=>5,'class'=>'small']) !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary small"
                        data-dismiss="modal">@lang('corals-classified-craigs::labels.partial.component.refer.close')</button>
                <button type="submit" class="btn btn-primary ladda-button small">@lang('corals-classified-craigs::labels.partial.component.refer.send')</button>
            </div>
            {!! CoralsForm::closeForm() !!}

        </div>
    </div>
</div>
