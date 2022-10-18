@extends('layouts.app')

@section('content')
<a href="{{route('students.create')}}">Aggiungi Studente</a>
<table>
    <th>
        <tr>
            <td>nome</td>
            <td>cognome</td>
            <td>matricola</td>
            <td>registrazione</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </th>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->name }}</td> 
            <td>{{ $student->surname  }}</td>
            <td>{{ $student->registration_number }}</td>
            <td>{{ $student->environment_date }}</td>
            <td>
                <a href="{{route('students.edit', $student)}}"></a>
            </td>
            <td>
                <a href="{{route('students.show', $student)}}">SHOW</a>
            </td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
    
@endsection