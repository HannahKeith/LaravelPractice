
@extends('app')


@section('title',  'Services')


@section('content')

<h1>Farm Find Services</h1>

<p>This is what we do.</p>




<ul>
  @forelse($services as $service)
    <li>{{$service}}</li>
    
    @empty
    <li>No Farmers in Your Area</li>
  @endforelse
</ul>

@endsection
