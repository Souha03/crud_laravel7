@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Admin') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                
                <div>
                     

                    <button  class="btn">
           
                        <a href="{{ route('users.index') }}">Médecin</a>
                            
                  </button>

                   <button  class="btn" >
           
                    <a href="{{ route('assistante.index') }}">Assistante</a>
                        
                  </button> 

                  <button  class="btn" >
           
                    <a href="{{ route('patient.index') }}">Patient</a>
                        
                  </button> 

                  

                  
                   
                  

                     


                </div>
            </div>
        </div>
    </div>
</div>
@endsection