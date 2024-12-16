<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Us</h1>
        @if(session('success'))
        <p>{{ session('success') }}</p>
        @endif
    <form action="{{ route('contact.send') }}" method="POST">
            @csrf

            <label for="name">Name:</label>
            <input type="text" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" required><br><br>

            <label for="message">Message:</label>
            <textarea name="message" required></textarea><br><br>

            <button type="submit">Send Message</button>
    </form>
</body>
</html>
