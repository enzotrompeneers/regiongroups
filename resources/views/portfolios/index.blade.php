@extends('layouts.web.master')

@section('content')
    <div class="grid-container">
        <p>test</p>
        <div class="grid-x">
            <p>test2</p>
            @foreach($portfolios as $portfolio)
                <div class="cell large-4">
                    @include('portfolios.portfolio')
                </div>
            @endforeach
            
        </div>
    </div>
    <h1>Portfolio page</h1>

    <h2>List portfolios</h2>
    

@endsection