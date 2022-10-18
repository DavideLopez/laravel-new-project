@extends('layouts.app')

@section('content')

<form action="{{route('students.store')}}" method="POST">
  @csrf()
   <input type="text" name="name" placeholder="inserisci il nome" value="{{old('name')}}">
   <input type="text" name="surname" placeholder="inserisci il cognome" value="{{old('cognome')}}">
   <input type="date" name="date_of_birth">
   <input type="text" name="fiscal_code" placeholder="codice fiscale">
   <input type="date" name="environment_date">
   <input type="email" name="email" placeholder="email">
   <input type="submit" value="salva">

</form>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


@endsection