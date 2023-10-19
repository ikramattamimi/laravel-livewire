<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}" wire:navigate>{{ config('app.name') }}</a>
        <button class="navbar-toggler" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" type="button"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <x-nav-link :active="request()->routeIs('home')" :href="route('home')">Home</x-nav-link>
                {{-- <x-nav-link :active="request()->routeIs('about')" :href="route('about')">About</x-nav-link> --}}
                <x-nav-link :active="request()->routeIs('user.*')" :href="route('user.index')">Users</x-nav-link>
                <x-nav-link :active="request()->routeIs('posts.*')" :href="route('posts.index')">Posts</x-nav-link>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @auth
                    <form action="/logout" method="post">
                        @csrf
                        <button class="btn nav-link" type="submit">Logout</button>
                    </form>
                @else
                    <x-nav-link :href="route('login')">Login</x-nav-link>
                @endauth
            </ul>
        </div>
    </div>
</nav>
