<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h1>Login</h1>

@if($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf

    <label for="PRN">PRN:</label>
    <input type="text" id="PRN" name="PRN" required>

    <label for="Password">Password:</label>
    <input type="password" id="Password" name="Password" required>

    <button type="submit">Login</button>
</form>

</body>
</html>
