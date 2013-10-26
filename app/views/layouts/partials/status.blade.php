@foreach(array('success', 'info', 'error', 'warning') as $status)
    @if(Session::has($status)
        <div class="alert alert-{{ $status == 'error' ? 'danger' : $status }} alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{ ucfirst($status) }}!</strong> {{ Session::get($status) }}
        </div>
    @endif
@endforeach