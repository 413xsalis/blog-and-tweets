@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Tweets</div>

                    <div class="card-body">
                        Twitter API (soon)
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $user->name }}</div>

                    <div class="card-body">
                        @if(session('status'))
                        <div class="alert alert-succes" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <p>Publish entries</p>
                        <ul>
                            @foreach ( $entries as $entry)
                            <li>
                                <a href="{{ $entry->getUrl() /*url('entries/'.$entry->slug.$entry->id)*/ }}">
                                    {{ $entry->title }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection