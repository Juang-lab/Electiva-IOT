@extends('layout.app')

@section('title','Inicio')
@section('content')

<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center bg-light p-4 rounded mb-4">
        <small class="text-primary fw-semibold">
            ESP32 - LTE (SIM7670G) · 
            <a href="#" class="text-decoration-none">PostgreSQL</a> · 
            <a href="#" class="text-decoration-none">Panel demo</a> · 
            <a href="#" class="text-decoration-none">Formulario & Tabla</a>
        </small>
        <div class="btn-group" role="group" aria-label="Navegación principal">
            <a href="#" class="btn btn-outline-primary">Inicio</a>
            <a href="#" class="btn btn-outline-primary">Tabla</a>
            <a href="#" class="btn btn-outline-primary">Formulario</a>
        </div>
    </div>

    <h2 class="fw-bold mb-3">Panel IoT — Monitoreo & Registros</h2>
    <p class="text-muted mb-4">Captura datos (contactos/actores del proyecto), visualízalos en tabla y prepara el entorno para conectar SENSORES de dispositivos IoT.</p>

    <div class="mb-4">
        <button class="btn btn-primary me-2"><i class="bi bi-plus-lg"></i> Registrar dato</button>
        <button class="btn btn-outline-secondary"><i class="bi bi-table"></i> Ver tabla</button>
    </div>

    <div class="row mb-4">
        <div class="col-md-4 mb-3">
            <div class="border rounded p-4 text-center shadow-sm bg-white h-100">
                <h5 class="fw-semibold">Sensores en línea</h5>
                <h2 class="fw-bold text-primary">3</h2>
                <small class="text-muted">Demo (mock) · Ajustable</small>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="border rounded p-4 text-center shadow-sm bg-white h-100">
                <h5 class="fw-semibold">Última sincronización</h5>
                <h2 class="fw-bold text-primary">hace 2 min</h2>
                <small class="text-muted">Simulada para la demo</small>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="border rounded p-4 text-center shadow-sm bg-white h-100">
                <h5 class="fw-semibold">Base de datos</h5>
                <h2 class="fw-bold text-primary">MYSQL</h2>
                <small class="text-muted">Conectado vía MYSQL</small>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="img/sensors.png" class="card-img-top" alt="sensors">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Gestión de registros</h5>
                    <p class="card-text">Crea y lista registros (base para actores, pacientes o dispositivos).</p>
                    <a href="#" class="btn btn-primary">Ir a gestión</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="img/iot.jpg" class="card-img-top" alt="iot">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Dispositivos IoT</h5>
                    <p class="card-text">Registro de dispositivos ESP32/SIM7670G, asignación y estado (pendiente).</p>
                    <a href="#" class="btn btn-primary">Ir a dispositivos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="img/dashboard.jpg" class="card-img-top" alt="dashboard">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Panel en tiempo real</h5>
                    <p class="card-text">Gráficas de telemetría (SpO₂, pulso, temperatura) con WebSockets (pendiente).</p>
                    <a href="#" class="btn btn-primary">Ir al panel</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection