@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" alt="Avatar" width="40" height="40" class="rounded-full">
                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <x-form.field>
                <textarea name="body"
                          rows="5"
                          class="w-full text-sm focus:outline-none focus:ring"
                          placeholder="Quick, Think of something to say!"
                          required></textarea>

                <x-form.error name="body" />
            </x-form.field>

            <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
                <x-form.button>
                    Post
                </x-form.button>
            </div>

        </form>
    </x-panel>
@else
    <p class="font-semibold text-center">
        <a href="/register" class="hover:underline text-blue-500">Register</a> or <a href="/login" class="hover:underline text-blue-500">Log in</a> to leave a comment.
    </p>
@endauth
