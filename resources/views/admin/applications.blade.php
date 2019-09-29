@extends('layouts.app')

@section('content')
    @if(Auth::user()->role_name == 'admin')
        <div class="d-flex flex-column">
                <div class="card text-center column align-self-center" style="width: 80vw">
                    <div class="card-header" style="background-color: #015e03; color: #fff;">
                        <h1 style="color: #fff;">Restaurant Applications</h1>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @foreach ($applications as $application)
                                <li class="list-group-item">
                                    <h5 class="card-title">{{ $application->name }}</h5>
                                    <p class="card-text">{{ $application->address }}</p>
                                    <p class="card-text">Account created {{ $application->created_at->format('F j, Y, g:i a') }}</p>
                                <a href="/approve/{{ $application->id }}" class='btn btn' style="background-color: #015E02; color: #fff">Approve</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-footer text-muted">
                    </div>
                </div>
        </div>
    @else
        <h1>Whoops! Looks like you aren't authorised to view this page...</h1>
    @endif    
@endsection