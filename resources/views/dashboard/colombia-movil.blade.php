@extends('layouts.app')

@section('title', 'Dashboard')

@section('container')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">FORDIS_11 DEALER</div>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">COACHING DEALER</div>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLScN2Zd28wVsYjVr2R3mJVIMST3H2sUG3iwGAcnKtRVqr1szrA/viewform?c=0&amp;w=1" class="card card-banner card-green-light">
                <div class="card-body">

                    <div class="content">
                        <div class="title">Entrar</div>
                        <div class="value"><span class="sign"><i class="fa fa-download" aria-hidden="true"></i></span>FORDIS_11 DEALER</div>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSd7fajZHoo7pEnjJ_uW0A506RBUBSPKxE1G8rSmxPfnedSYag/viewform?c=0&amp;w=1" class="card card-banner card-blue-light">
                <div class="card-body">
                    <div class="content">
                        <div class="title">Entrar</div>
                        <div class="value"><span class="sign"><i class="fa fa-download" aria-hidden="true"></i></span>COACHING DEALER</div>
                    </div>
                </div>
            </a>

        </div>
    </div>

@endsection

@push('script')

@endpush