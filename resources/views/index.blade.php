@extends('default')

@section('title')
    PassenOpJeDier.nl
@endsection
<!-- @include('animals.checkbox--index') -->
@section('content')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($animals as $animal)
        @include('animals.animalsCard--index')
    @endforeach
</ul>
@endsection