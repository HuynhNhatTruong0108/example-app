<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <!-- <x-authentication-card-logo /> -->
            <img src="backend\images\logo_NTU.webp" width="150" height="150" alt="" style=" border-radius:1000px;">

        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Quên mật khẩu ? gửi mail để xác nhập lấy lại mật khẩu') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Gửi mail xác nhận') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
