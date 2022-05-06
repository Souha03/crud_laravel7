@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('You are in MEDECIN Dashboard!') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}

                    {{ __('You are logged in!') }}
                    
                </div>
                <div>
                    <button  class="btn" >
           
                        <a href="{{ route('assistantecrud.index') }}">Assistante</a>
                            
                      </button>
    
                      <button  class="btn" >
               
                        <a href="{{ route('patientcrud.index') }}">Patient</a>
                            
                      </button>

                      <button  class="btn" >
               
                        <a href="{{ route('aliments.index') }}">Patient</a>
                            
                      </button>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
