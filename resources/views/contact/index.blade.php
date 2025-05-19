<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/contact" method="POST">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>

        <label>No. HP:</label><br>
        <input type="text" name="phone" value="{{ old('phone') }}"><br><br>

        <label>Message:</label><br>
        <textarea name="message">{{ old('message') }}</textarea><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>