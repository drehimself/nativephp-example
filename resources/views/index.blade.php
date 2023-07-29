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
        @foreach ($posts as $post)
            <div class="flex items-center">
                <img src="{{ $post['data']['thumbnail'] }}" alt="thumb" class="rounded-full w-20">
                <div class="ml-2">
                    <div class="font-semibold"><a href="/posts/{{ $post['data']['name'] }}">{{ $post['data']['title'] }}</a></div>
                    <div class="flex space-x-4">
                        <span>Ups: {{ $post['data']['ups'] }}</span>
                        <span>Comments: {{ $post['data']['num_comments'] }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
