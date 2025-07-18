@extends('layout.app')

@section('content')

<div class="container-fluid">

    <h5 class="text-center mt-3 mb-4">{{ __('lang.description') }}</h5>

    <h2 class="text-center">Sweetalert2</h2>
    @include('widget.sweetalert2')

    <h2 class="text-center">Badges</h2>
    @include('widget.badge')

</div>
@endsection