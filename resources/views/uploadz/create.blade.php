{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add--Image</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class="container">
	    <div class="jumbotron">
            <h1>Add Dashimage</h1> <br>
        <form action=" {{ route('addupload') }} " method="post" enctype="multipart/form-data">
            
        {{ csrf_field() }}
            
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title_name" class="form-control" placeholder="Title Name">
            </div>
    
            

            <div class="form-group">
                <label>Discription</label>
                <input type="text" name="discription" class="form-control" placeholder="Enter Discription">
            </div>

            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input">
                    <label class="custom-file-label">Choose file</label>
                </div>

            </div>

                <button type="submit" name="submit" class="btn btn-primary mt-4"> Submit</button>

            </form>    
        </div>
	
    </div>
    
</body>
</html> --}}