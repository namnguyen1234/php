<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

</head>

<body>
    <form action="{{ route('edit', ['id' => $edit['id']]) }}" method="POST" class="container">
        @csrf
        {{-- <div class="form-group" value="{{$edit['id']}}" type="hidden"> --}}
        @if (session('message'))
            <strong>{{ session('message') }}</strong>
        @endif
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" value="{{ $edit['email'] }}" name="email"
                aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        @if ($errors->has('email'))
            <strong class="text-danger">{{ $errors->first('email') }}</strong>
        @endif
        <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>

</html>
