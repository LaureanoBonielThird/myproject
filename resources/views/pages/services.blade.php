@extends('layout.app')
@section('content')
        <h1> Our Services</h1>
        <ul class="list-group">
            @if(count($services)>0)
            @foreach($services as $service)
            <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
        @endif


@endsection  

