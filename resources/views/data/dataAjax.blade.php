@extends('public.layouts.app')

@push('script-head')
    <script src="{{ asset('js/validationForm.js') }}" defer></script>
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <a class="btn btn-info mx-auto" href="{{ url('/data/dataAjax') }}">
                <i class="fas fa-sync-alt"></i>
                {{ __('Recargar la página') }}
            </a>

            <button id="load" type="submit" class="btn btn-success mx-2">
                {{ __('Cargar datos') }}
            </button>

            <button id="loadOne" type="submit" class="btn btn-info mx-auto">
                {{ __('Cargar uno a uno los datos') }}
            </button>

            <button id="loadView" type="submit" class="btn btn-warning mx-5">
                {{ __('Cargar vista') }}
            </button>
        </div>
        <br>
        <div id="topicList"></div>
    </div>
@endsection