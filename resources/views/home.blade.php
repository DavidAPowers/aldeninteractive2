@extends('layouts.dashboard')

@section('content')

            <div class="w3-container">
                <h2>{{ __('Dashboard') }}</h2>

                <div class="card-body w3-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

@endsection
