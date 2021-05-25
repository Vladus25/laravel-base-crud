@extends('layouts.main-layout')
@section('content')
  <main>
    <div>
      <ul>
        <li><h1>Ospite:</h1></li>
        <li><h1>ID: {{ $ospite -> id }}</h1></li>
        <li><h1>Name: {{ $ospite -> name }}</h1></li>
        <li><h1>Lastname: {{ $ospite -> lastname }}</h1></li>
        <li><h1>Date of birth: {{ $ospite -> date_of_birth }}</h1></li>
        <li><h1>Document Type: {{ $ospite -> document_type }}</h1></li>
        <li><h1>Document number : {{ $ospite -> document_number }}</h1></li>
      </ul>
    </div>
    <a class="home" href="{{route('home')}}">List Games</a>
  </main>
@endsection
