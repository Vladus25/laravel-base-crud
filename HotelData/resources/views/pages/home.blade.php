@extends('layouts.main-layout')
@section('content')
  <main>
    {{-- Tabella fake di Games --}}
    <h1>Games</h1>
    <ol>
      @foreach ($ospiti as $ospite)
        <li>
          <a href="{{route('ospite', $ospite -> id)}}">
            {{ $ospite -> name }}
            {{ $ospite -> lastname }}
          </a>
        </li>
      @endforeach
    </ol>
    <a class="home" href="http://localhost:8000/create/ospite">Ad New Game</a>
  </main>

@endsection
