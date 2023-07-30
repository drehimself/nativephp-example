<x-layout>
    <div>
        {{ $theme }}
    </div>
    <div>
        Hello there!!!
    </div>
    <div>
        <div>
            <form action="/user" method="POST">
                @csrf
                <button type="submit">Create User</button>
            </form>
        </div>
        <div>
            @forelse ($users as $user)
                <div>{{ $user->name }}</div>
            @empty
                <div>No users found</div>
            @endforelse
        </div>
    </div>
</x-layout>
