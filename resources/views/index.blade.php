<x-layout-reddit>
    <div class="space-y-4 mt-8">
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
</x-layout-reddit>
