<ul>
    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="{{ route('home') }}"
        >
            Home
        </a>
    </li>

    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="/explore"
        >
            Explore
        </a>
    </li>

    @auth
        <li>
            <a
                class="font-bold text-lg mb-4 block"
                href="{{ current_user()->path() }}"
            >
                Profile
            </a>
        </li>

        <li>
            <form method="POST" action="/logout">
                @csrf

                <button class="font-bold text-lg">Logout</button>
            </form>
        </li>
    @endauth
</ul>
