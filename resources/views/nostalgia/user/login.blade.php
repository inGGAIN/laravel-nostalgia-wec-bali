<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
</head>

<body>
    @if ($errors->any())
        @foreach ($errors->all() as $ror)
            <p class="alert">{{ $ror }}</p>
        @endforeach

    @endif
    <form action="{{ route('login.action') }}" method="post">
    @csrf
        <input type="text" name="username" placeholder="username" value="{{ old('username') }}">

        <input type="password" name="password" placeholder="password">

        <button>login</button>
</form>
</body>

</html>
