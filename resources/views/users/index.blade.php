@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Check all Médecin</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create</a>
                <a class="btn btn-primary" href="{{ route('admin.index') }}"> Back</a>
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
        @foreach ($users as $user)
        @if($user->role == 2)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->firstname }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                   
                    <button type="submit" class="btn btn-danger">Delete</button>
        
                    </form>
            </td>
           
           
           
        </tr>
        @endif 
        @endforeach
        
    </table>
  
    {!! $users->links() !!}
    
@endsection
<?php @include('layouts/app.php') ?>