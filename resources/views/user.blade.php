@extends('layouts.default')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
@endpush

@section('content')

<h1>
    User
</h1>

{{$user-> name}}<br>
{{$user-> email}}

@endsection

@push('scripts')
    <script src={{ asset('js/user.js') }}></script>
@endpush


