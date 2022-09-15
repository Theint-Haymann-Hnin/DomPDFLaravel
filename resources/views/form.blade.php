<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="{{url('/form/store')}}" method="post">
                    @csrf

                    <div class="form-group mt-3">
                      <input type="text" class="form-control" id="code"  name="code" value="{{$code}}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                      </div>
                    <div class="form-group mt-3">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group mt-3">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                      </div>
                      <div class="form-group mt-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
                      </div>
                      <div class="form-group mt-3">
                        <label for="university">University</label>
                        <input type="text" class="form-control" id="university" placeholder="Enter university" name="university">
                      </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                  </form>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
         <div class="col-md-3">
          <button class="btn btn-info mt-3" onclick="location.href='{{ url('/test') }}'">Testing</button>
         </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>