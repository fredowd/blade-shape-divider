@extends('shape-divider::_layout')

@section('svg-content')

    @if($invert)
    <path d="M602.45,3.86h0S572.9,116.24,281.94,120H923C632,116.24,602.45,3.86,602.45,3.86Z" class="shape-fill"></path>
    @else
    <path d="M1200,0H0V120H281.94C572.9,116.24,602.45,3.86,602.45,3.86h0S632,116.24,923,120h277Z"></path>
    @endif

@endsection
