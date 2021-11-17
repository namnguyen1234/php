<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!Doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Đăng kí</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<link rel="stylesheet" type="text/css" href="css/register.css">

<body>
    <form action="{{ route('dang-ki') }}" method="POST">
        @csrf
        @if (session('message'))
            <strong>{{ session('message') }}</strong>
        @endif
        <div class="container">
            <header class="heading"> Đăng kí</header>
            <hr>
            <div class="row ">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-xs-4">
                            <label class="mail">Email :</label>
                        </div>
                        <div class="col-xs-8">
                            <input type="email" name="email" id="email" placeholder="Enter your email"
                                class="form-control">
                        </div>
                    </div>
                    @if ($errors->has('email'))
                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                    @endif
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-xs-4">
                            <label class="pass">Password :</label>
                        </div>
                        <div class="col-xs-8">
                            <input type="password" name="password" id="password" placeholder="Enter your Password"
                                class="form-control">
                        </div>
                        @if ($errors->has('password'))
                            <strong class="text-danger">{{ $errors->first('password') }}</strong>
                        @endif
                    </div>
                </div>
                <div class="col-sm-12">
                    <input class="btn btn-warning" type="submit" value="Đăng kí" style="margin-top: 8px">
                </div>

            </div>
        </div>
    </form>

</body>

</html>
