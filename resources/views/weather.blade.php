@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                Погода в Брянске: {{ $temperature }}
            </div>
        </div>
    </div>
@endsection