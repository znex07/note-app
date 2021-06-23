@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="form-group">
                        <form action="/notes" method="post">
                            @csrf
                            <input type="text" name="title" class="form-control" placeholder="Title" id="">
                            <div class="form-group">
                              <label for="">Your Note</label>
                              <textarea class="form-control" name="note" id="" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <ul class="list-group">
            @foreach($notes as $note)
            <li class="list-group-item">  {{ $note->title }} <a class="btn btn-sm btn-danger float-right" data-info="{{$note->id}}">x</a></li>
            @endforeach
        </ul>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $(document).ready(function() {
        alert("Settings page was loaded");
    });
</script>
@stop
