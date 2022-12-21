@extends('layouts.app')

@section('content')
<div class="container">
    <?php if(isset($depth)){ ?>
        <div class="row pb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Depth Market <?= Request::segment(2);?></div>
                    <div class="card-body">
                        <div id="chartdiv" style="width: 100%;height: 400;"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php }else{ ?>
        <div class="row">
            <div class="col-md-12">
            <div class="alert alert-primary" role="alert">
                <h4 class="alert-heading">Poloniex Exchange</h4>
                <p>Implementasi layanan vendor dari github <a href="https://github.com/htunlogic/laravel-poloniex">htunlogic/laravel-poloniex</a></p>
                <hr>
                <p class="mb-0">Tugas Mata Kuliah Framework 2018</p>
            </div>
            </div>
        </div>
    <?php } ?>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tickers</div>
                <div class="card-body">
                    @include('tickers')
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Volume</div>
                <div class="card-body">
                    @include('volume')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<?php if(isset($depth)){ ?>
@include('depth')
<?php } ?>