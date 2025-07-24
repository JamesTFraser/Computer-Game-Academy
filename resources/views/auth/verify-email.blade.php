<x-app-layout>
    <div class="container px-sm-0">
        <div class="row">
            <div class="col-md-8 mx-md-auto">
                <p>{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}</p>

                @if (session('status') == 'verification-link-sent')
                    <p>{{ __('A new verification link has been sent to the email address you provided during registration.') }}</p>
                @endif

                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <x-primary-button>
                        {{ __('Resend Verification Email') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
