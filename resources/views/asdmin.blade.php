<@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <div class="container">
                        <div class="jumbotron">
                            <h1>Add image</h1> <br>
                        <form action=" {{ route('addimage') }} " method="post" enctype="multipart/form-data">
                            
                        {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name">
                            </div>
                    
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email"class="form-control" placeholder="Enter Email ID">
                            </div>

                            <div class="form-group">
                                <label>Post</label>
                                <input type="text" name="post" class="form-control" placeholder="Enter Post">
                            </div>

                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input">
                                    <label class="custom-file-label">Choose file</label>
                                </div>

                            </div>

                                <button type="submit" name="submit" class="btn btn-primary mt-4"> Save Data</button>

                            </form>    
                        </div>
                    
                    </div>
                    
                               
        </div>
    </div>


 </div>
</div>
</div>
@endsection   