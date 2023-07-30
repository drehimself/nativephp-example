<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NativePHP</title>
    <script src="https://cdn.tailwindcss.com"></script>

    @vite('resources/js/app.js')

    <style>
        body.dark {
            background: #222;
            color: white;
        }

        body.dark a {
            color: lightblue;
        }
    </style>
</head>

<body class="{{ $theme }}">
    <div>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/?openwindow=true">Open Window</a>
        <a href="/?notification=true">Notification</a>
        <a href="/settings">Settings</a>
        <a href="/reddit">Reddit</a>
    </div>

    <main>
        {{ $slot }}
    </main>
</body>

</html>
