@extends('admin.layout.index')
@section('content')
<calculator :order="{{$data}}"></calculator>
@endsection
