<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Profile</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">College Management System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Course.index') }}">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('student-form') }}">Student Data API</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<h1>Edit Profile</h1>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<form method="POST" action="{{ route('profile.update') }}">
    @csrf

    <label for="Name">Name:</label>
    <input type="text" id="Name" name="Name" value="{{ old('Name', $student->Name) }}" required>
    @error('Name') <div>{{ $message }}</div> @enderror

    <label for="Email">Email:</label>
    <input type="email" id="Email" name="Email" value="{{ old('Email', $student->Email) }}" required>
    @error('Email') <div>{{ $message }}</div> @enderror

    <label for="Address">Address:</label>
    <input type="text" id="Address" name="Address" value="{{ old('Address', $student->Address) }}" required>
    @error('Address') <div>{{ $message }}</div> @enderror

    <button type="submit">Update Profile</button>
</form>

</body>
</html>
