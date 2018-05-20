@if($flash = session('message'))
    <div class="session" role="alert">
        {{ $flash }}
    </div>
@endif