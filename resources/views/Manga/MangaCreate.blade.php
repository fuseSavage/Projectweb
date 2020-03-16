@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Add comment</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="/store/magna">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Alias</label>
                          <input name="title_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


                          <label for="exampleInputEmail1" class="mt-4">Comment</label>
                          <textarea name="details" type="text" class="form-control mt-1" id="title" rows="3"></textarea>


                         
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    
                    
 
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
