<div class="sessions">
    @if($info_message = session('info'))
        <div data-closable class="callout alert-callout-border primary radius">
            <strong>Info</strong> - {!! $info_message !!}
        </div>
    @endif
    
    @if($success = session('success'))
        <div data-closable class="callout alert-callout-border success radius">
            <strong>Succes</strong> - {!! $success !!}
        </div>
    @endif

    @if($warning = session('warning'))
        <div data-closable class="callout alert-callout-border warning radius">
            <strong>Waarschuwing</strong> - {!! $warning !!}
        </div>
    @endif

    @if($alert = session('alert'))
        <div data-closable class="callout alert-callout-border alert radius">
            <strong>Fout</strong> - {!! $alert !!}
        </div>
    @endif
</div>
