@extends('layouts.app')

@section('template_title')
    {{ $persona->name ?? "{{ __('Show') Persona" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Paterno:</strong>
                            {{ $persona->paterno }}
                        </div>
                        <div class="form-group">
                            <strong>Materno:</strong>
                            {{ $persona->materno }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $persona->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $persona->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
