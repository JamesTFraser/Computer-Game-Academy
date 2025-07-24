<x-app-layout>
    <div class="container page-content px-0">
        <div class="row">
            <div class="col-md-6 mx-md-auto">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <x-primary-button>
                        {{ __('Confirm') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
