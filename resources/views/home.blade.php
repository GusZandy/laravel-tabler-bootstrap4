@extends('layouts.app')

@section('page-title', 'Home')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            @component('components.panel', [
                'title' => 'Welcome',
            ])
                @slot('tools')
                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                            class="fe fe-chevron-up"></i></a>
                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                @endslot
                You are logged in!
            @endcomponent
        </div>
    </div>
@endsection
