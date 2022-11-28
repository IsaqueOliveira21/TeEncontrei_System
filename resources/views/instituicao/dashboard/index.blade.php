@extends('instituicao.template')
@section('titulo')
    DASHBOARD
@endsection

@php
    $migalhas = [
        ['item' => 'DASHBOARD', 'link' => '#'],
];
@endphp

@section('conteudo')
    <div class="row">
        <div class="content">
            <div class="block block-rounded">
                <div class="block-content">
                    <div id="grafico1">
                    </div>
                </div>
            </div>
            <div class="block block-rounded">
                <div class="block-content">
                    <div id="grafico2">
                    </div>
                </div>
            </div>
            <div class="block block-rounded">
                <div class="block-content">
                    <div id="grafico3">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
