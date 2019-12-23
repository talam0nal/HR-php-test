@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            	 {{ count($orders) }}
            </div>
        </div>
    </div>
@endsection