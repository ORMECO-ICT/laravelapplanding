@extends('layouts.app')

@section('content-header')
    <div class="col-sm-6">
        <h1 class="m-0">Manage Portals</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
        <li class="breadcrumb-item active">Portals</li>
        </ol>
    </div><!-- /.col -->
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
    @if($portals)
        @foreach($portals as $portal)
        <div class="col-lg-6">
            <div class="card card-primary card-outline">
            <div class="card-body">
                <h5 class="card-title">{{$portal->title}}</h5>

                <p class="card-text">
                    {{$portal->description}}
                </p>
                <a href="{{url(config('app.domain').'/'.$portal->directory)}}" class="card-link">Visit</a>
                <a href="#" class="card-link">Edit</a>
            </div>
            </div><!-- /.card -->
        </div>
        @endforeach
    @endif
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
  @endsection
