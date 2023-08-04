<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error )
        <li>{{ $error  }}</li>
        @endforeach
    </ul>
@endif

@if (\Session::has('error'))
    <p style="color: red;">{{ \Session::get('error') }}</p>
@endif
<form action="{{ route('admin_signin') }}" method="post">

@csrf
<div class="input-group">
    <input type="text" class="form-control" name="email" placeholder="Your Email Address">
    <span class="md-line"></span>
</div>
<div class="input-group">
    <input type="password" class="form-control" name="password" placeholder="Password">
    <span class="md-line"></span>
</div>

<div class="row m-t-30">
    <div class="col-md-12">
        <input type="submit" value="SUBMIT">
    </div>
</div>
</form>
</body>
</html>
