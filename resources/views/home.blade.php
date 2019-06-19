@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p>You are logged in! Click <a href='/'>here</a> to find a fun activity to do!</p>
                    <p>Or click <a href='/backlog'>here</a> to see all previously suggested activities!</p>
                    <p>If you're really comfortable in that couch, maybe watch a <a href='/movies'>random</a> movie?</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection