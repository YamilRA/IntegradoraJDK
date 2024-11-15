@extends('layout.Molde')
@section('title', 'Info Alumnos')

@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Alumnos por Clase</h2>

    @foreach($studentsClass as $group)
        <div class="mb-4">
            <h4>{{ $group['class']->name }} ({{ $group['class']->schedule_day }}: {{ $group['class']->schedule_start }} - {{ $group['class']->schedule_end }})</h4>

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Nombre del Alumno</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($group['students'] as $student)
                            <tr>
                                <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
</div>

@endsection
