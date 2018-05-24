@if($info_message = session('info'))
    <div class="info-message" role="alert">
        {!! $info_message !!}
    </div>
@endif
@if($crud_message = session('crud'))
    <div class="crud-message" role="alert">
        {!! $crud_message !!}
    </div>
@endif