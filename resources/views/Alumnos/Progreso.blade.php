@extends('layouts/MoldeAl')

@section('title', 'Mi Progreso')

@section('contents')
    
    <div class="background-div-pro">
            <ul class="menu-vertical">
                <li onclick="showSection('cintas')">Mis Cintas</li>
                <li onclick="showSection('torneos')">Torneos</li>
            </ul>
    
            <div id="cintas" class="content-section">
                <table class="table table-bordered w-100">
                    <tr class="table-dark">
                        <th>mis cinta</th>
                        <th>mis examenes</th>
                    </tr>
                </table>
            </div>
    
            <div id="torneos" class="content-section">
                <table class="table table-bordered w-100">
                    <tr class="table-dark">
                        <th>mis torneos</th>
                        <th>mis resultados</th>
                    </tr>
                </table>
            </div>
        </div>
    <script>
        function showSection(sectionId) 
        {
            document.querySelectorAll('.content-section').forEach(function(section) 
            {
                section.style.display = 'none';
            });
            document.getElementById(sectionId).style.display = 'block';
        }
    </script>
    @endsection