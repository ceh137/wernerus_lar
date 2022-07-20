@extends('admin.layout.index')
@section('content')
<calculator :order="{{$data}}" :to_order="{{ $to_order == 1 ? 'true' : 'false' }}"></calculator>
@endsection
