@if($message = session('message'))
    <div class="session" role="alert">
        {!! $message !!}
    </div>
@endif