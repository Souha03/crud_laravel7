
@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Check all Patients</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('patientcrud.create') }}"> Create</a>
                <a class="btn btn-primary" href="{{ route('medecin.index') }}"> Back</a>
            </div>
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>E-mail</th>

            <th width="250px">Action</th>
        </tr>
        @foreach ($patients as $patient)
        @if($patient->role == 4)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $patient->firstname }}</td>
            <td>{{ $patient->email }}</td>
            <td>
                <form action="{{ route('patientcrud.destroy',$patient->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('patientcrud.show',$patient->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('patientcrud.edit',$patient->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endif 
        @endforeach
        
    </table>
  
    {!! $patients->links() !!}
      
@endsection