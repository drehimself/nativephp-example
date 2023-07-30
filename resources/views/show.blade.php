<x-layout-reddit>
    <div class="space-y-4">
        <h2 class="text-lg font-semibold mt-4">{{ $post[0]['data']['title'] }}</h2>

        <div class="mt-4">
            <img src="{{ $post[0]['data']['url'] }}" alt="image" class="">
        </div>
    </div>
</x-layout-reddit>
