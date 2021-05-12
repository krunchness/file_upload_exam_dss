<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>File Upload</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    <body>
        <div class="file-upload-container" style="padding-top: 50px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">

                        @if(!empty(session('message')))  
                            @if(session('message') == 'success')
                                <div class="alert alert-success" role="alert">
                                  File uploading success!
                                </div>
                            @else
                                <div class="alert alert-danger" role="alert">
                                  File upload encountered an error! Please Try Again
                                </div>
                            @endif
                        @endif
                        <h1>Upload File</h1>
                        <form method="post" action="{{ route('file.upload') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              <label for="formFile" class="form-label">Default file input</label>
                              <input class="form-control" type="file" id="formFile" name="single_upload">
                            </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        
    </body>
</html>
