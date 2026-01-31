<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

        <div x-data="{ open: @js($errors->userDeletion->isNotEmpty()) }">
            <x-primary-button
                type="button"
                x-on:click="open = true"
                class="bg-red-600 hover:bg-red-500 focus:bg-red-500 active:bg-red-700 focus:ring-red-500"
            >{{ __('Delete Account') }}</x-primary-button>

            <div
                x-cloak
                x-show="open"
                x-on:keydown.escape.window="open = false"
                class="fixed inset-0 z-50 flex items-center justify-center"
            >
                <div class="fixed inset-0 bg-gray-500/75" x-on:click="open = false"></div>

                <div class="relative w-full max-w-lg mx-4 bg-white rounded-lg shadow-xl">
                    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <button
                    type="button"
                    x-on:click="open = false"
                    class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"
                >
                    {{ __('Cancel') }}
                </button>

                <x-primary-button class="ms-3 bg-red-600 hover:bg-red-500 focus:bg-red-500 active:bg-red-700 focus:ring-red-500">
                    {{ __('Delete Account') }}
                </x-primary-button>
            </div>
        </form>
            </div>
        </div>
    </div>
</section>
