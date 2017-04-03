@extends('layouts.app')

@section('title', 'Dashboard')

@section('container')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Como Vamos Diario</div>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Impactos Diarios</div>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <a class="card card-banner card-green-light">
                <div class="card-body">
                    <i class="icon fa fa fa-line-chart fa-4x"></i>
                    <div class="content">
                        <div class="title">Descargar</div>
                        <div class="value"><span class="sign"><i class="fa fa-download" aria-hidden="true"></i></span>Como Vamos Diario</div>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <a class="card card-banner card-blue-light">
                <div class="card-body">
                    <i class="icon fa fa-area-chart fa-4x"></i>
                    <div class="content">
                        <div class="title">Descargar</div>
                        <div class="value"><span class="sign"><i class="fa fa-download" aria-hidden="true"></i></span>Impactos Diarios</div>
                    </div>
                </div>
            </a>

        </div>
    </div>
@endsection

@push('script')

@endpush