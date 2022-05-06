<form action="{{ route('users.destroy',$user->id) }}" method="POST" enctype="multipart/form-data">
    
    {{ method_field('delete')}}
    {{  csrf_field() }}
    <div class="modal fade" id="ModelDelete{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document" onsubmit="return confirm('supp')">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{__('User Delete')}}</h4>
                    <button type="button" class="Close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"> You sure you want to delete <b>{{$user->name}}</b> ? </div>
                <div class="modal-footer">
                    <button class="btn btn-danger btn-flat btn-sm remove-user" data-id="{{ $user->id }}" data-action="{{ route('users.destroy',$user->id) }}" onsubmit="return confirm('supp')"> Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>