
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Assistante</h2>
                
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('assistantecrud.index') }}"> Back</a>

            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $assistante->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-mail:</strong>
                {{ $assistante->email }}
            </div>
        </div>
        
    </div>
@endsection