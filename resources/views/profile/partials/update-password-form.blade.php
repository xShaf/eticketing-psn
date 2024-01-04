<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Update Password
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Ensure your account is using a long, random password to stay secure.
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="put">

        <div class="mb-4">
            <label for="update_password_current_password" class="block text-sm font-medium text-gray-700">Current Password</label>
            <input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password">
            @error('updatePassword.current_password')
                <p class="mt-2 text-sm text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="update_password_password" class="block text-sm font-medium text-gray-700">New Password</label>
            <input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password">
            @error('updatePassword.password')
                <p class="mt-2 text-sm text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="update_password_password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password">
            @error('updatePassword.password_confirmation')
                <p class="mt-2 text-sm text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-primary">Save</button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-success">Saved.</p>
            @endif
        </div>
    </form>
</section>
