@extends('adminlte::page')

@section('title', 'care.training')

@section('content_header')

    <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 1rem;">
        <div class="d-flex flex-row">
            <h1 class="text-dark">Published courses</h1>
        </div>

        <div class="d-flex flex-row-reverse">

                <div class="btn-group">
                    <button type="button" class="btn text-white" style="background-color:#1D6F42;"><i class="fas fa-share-square mr-1"></i>Export</button>
                    <button type="button" class="btn text-white dropdown-toggle dropdown-toggle-split" style="background-color:#1D6F42;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                    <h6 class="dropdown-header">Available formats</h6>
                    <a class="dropdown-item" href="{!! route('admin.published.courses.export', ['format' => 'xlsx']) !!}">XLSX</a>
                    <a class="dropdown-item" href="{!! route('admin.published.courses.export', ['format' => 'csv']) !!}">CSV</a>
                    <a class="dropdown-item" href="{!! route('admin.published.courses.export', ['format' => 'ods']) !!}">ODS</a>
                </div>

        </div>
    </div>
@stop

@section('content')

    @livewire('admin.courses-published')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
