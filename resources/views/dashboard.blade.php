@extends('main')
@section('title','Empresa')
@section('content')
<main>
    <div class="header">
        <div class="left">
            <h1>Dashboard</h1>
            <ul class="breadcrumb">
                <li><a href="#">
                        dashboard
                    </a></li>
                /
                <li><a href="#" class="active">charts</a></li>
            </ul>
        </div>
        <a href="#" class="report">
            <i class='bx bx-cloud-download'></i>
            <span>Download CSV</span>
        </a>
    </div>

@livewire('cdashboard')  

@endsection 