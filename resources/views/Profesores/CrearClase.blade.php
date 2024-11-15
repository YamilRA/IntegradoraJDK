@extends('layouts.Molde')

@section('title', 'Crear nueva Clase')

@section('content')
<div class="container">
    <h2 class="text-center my-4">Lista de Clases</h2>

    
    <h2 class="text-center my-4">Crear Nueva Clase</h2>
    <form action="{{ route('class.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="teacher_id" class="form-label">ID del Profesor</label>
            <input type="number" name="teacher_id" id="teacher_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="capacity" class="form-label">Capacidad de la Clase</label>
            <input type="number" name="capacity" id="capacity" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="schedule_day" class="form-label">Día de la Clase</label>
            <input type="text" name="schedule_day" id="schedule_day" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="schedule_start" class="form-label">Hora de Inicio</label>
            <input type="time" name="schedule_start" id="schedule_start" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="schedule_end" class="form-label">Hora de Fin</label>
            <input type="time" name="schedule_end" id="schedule_end" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-danger w-100">Crear Clase</button>
    </form>
</div>


<script>
    function loadClassData(classData) {
        document.getElementById('edit_teacher_id').value = classData.teacher_id;
        document.getElementById('edit_capacity').value = classData.capacity;
        document.getElementById('edit_schedule_day').value = classData.schedule_day;
        document.getElementById('edit_schedule_start').value = classData.schedule_start;
        document.getElementById('edit_schedule_end').value = classData.schedule_end;
        document.getElementById('edit_status').value = classData.status;

        document.getElementById('editClassForm').action = `/actualizar/clase/${classData.id}`;
    }
</script>
@endsection
