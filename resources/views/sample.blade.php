<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .box {
        border: 2px solid #E74C3C;
    }

    h2 {
        color: #E74C3C;
    }

    .container {
        position: relative;
    }

    .paid {
        color: red;
        font-size: 40px;
        margin-left: 20px;
    }
</style>

<body>
    <div class="row mt-2">
        <div class="col-md-2">
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class=" col-md-2">
            </div>
            <div class=" col-md-8 box">
                <h2 class="mt-3 mb-3 ml-2">Cash Recepit</h2>
                <p>Date: 7/11/2022</p>
                <form>
                    <div class="form-group row mt-5 mb-5">
                        <label for="" class="col-md-2 form-label ml-2">Received From</label>
                        <div class="col-md-10 ">
                            <input type="text" readonly class="" value=""
                                style="width:500px; height:30px;margin-left: 10px;">
                        </div>
                    </div>
                    <div class="form-group row mt-5 mb-5">
                        <label for="" class="col-md-2 form-label ml-2">Amount</label>
                        <div class="col-md-10 ">
                            <input type="text" readonly class="" value=""
                                style="width:500px; height:30px;margin-left: 10px;">
                        </div>
                    </div>
                    <div class="form-group row mt-5 mb-5">
                        <label for="" class="col-md-2 form-label ml-2">Cash/Check Number</label>
                        <div class="col-md-10 ">
                            <input type="text" readonly class="" value=""
                                style="width:500px; height:30px;margin-left: 10px;">
                        </div>
                    </div>

                    <div class="form-group row mb-5">
                        <label for="" class="col-sm-2 col-form-label ml-2">Received From</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="" value=""
                                style="width:500px; height:30px;margin-left: 10px;">
                        </div>
                    </div>
                    <div class="received-by row mb-3">
                        <p class="ml-2">Received By</p>
                        <input type="text" readonly class="" value=""
                            style="width:150px; height:30px;margin-left: 10px;">
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
