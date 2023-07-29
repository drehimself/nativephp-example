<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NativePHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/js/app.js')
</head>

<body>
    <div>
        <a href="/">Home</a>
    </div>
    <div class="space-y-4">
        <h2 class="text-lg font-semibold mt-4">{{ $post[0]['data']['title'] }}</h2>

        <div class="mt-4">
            <img src="{{ $post[0]['data']['url'] }}" alt="image" class="">
        </div>
    </div>
</body>

</html>
