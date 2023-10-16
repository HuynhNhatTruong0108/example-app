<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <!-- <x-authentication-card-logo /> -->
            <img src="backend\images\logo_NTU.webp" width="150" height="150" alt="" style=" border-radius:1000px;">

        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Đây là một khu vực an toàn của ứng dụng. Vui lòng xác nhận mật khẩu của bạn trước khi tiếp tục.') }}
        </div>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Xác nhận') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
