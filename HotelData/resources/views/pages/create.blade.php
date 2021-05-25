@extends('layouts.main-layout')
@section('content')
  <main>
    <div>
      <form method="POST" action="{{ route('newOspite') }}">
        @csrf
        @method('POST')

        <ul>

          <li><h1>New Ospite</h1></li>

          <li class="create-new-ospite">
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="Min:2 | Max:50">
          </li>

          <li class="create-new-ospite">
            <label for="lastname">Lastname:</label>
            <input type="text" name="lastname" placeholder="Min:2 | Max:50">
          </li>

          <li class="create-new-ospite">
            <label for="date_of_birth">Date of birth:</label>
            <input type="date" name="date_of_birth">
          </li>

          <li class="create-new-ospite">
            <label for="document_type">Document type:</label>
            <input type="text" name="document_type" placeholder="Passport | CI | Driver License">
          </li>

          <li class="create-new-ospite">
            <label for="document_number">Document number:</label>
            <input type="text" name="document_number" placeholder="Es: 886-657-2534">
          </li>

        </ul>
        <button type="submit" class="home">Aggiungi Ospite</button>
      </form>
    </div>
  </main>
@endsection
