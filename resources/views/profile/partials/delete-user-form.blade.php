<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Delete Account
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting
            your account, please download any data or information that you wish to retain.
        </p>
    </header>

    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirm-user-deletion">
        Delete Account
    </button>

    <div class="modal fade" id="confirm-user-deletion" tabindex="-1" aria-labelledby="confirm-user-deletion-label"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content p-4">
                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                    @csrf
                    @method('delete')

                    <h2 class="text-lg font-medium text-gray-900 mb-4">
                        Confirm Account Deletion
                    </h2>

                    <p class="text-sm text-gray-600 mb-6">
                        Deleting your account will permanently remove all your data. Please enter your password to
                        confirm.
                    </p>

                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" name="password" type="password" class="form-control"
                            placeholder="Enter your password">
                        @error('userDeletion.password')
                            <p class="mt-2 text-sm text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end">
                        <button type="button" class="btn btn-secondary mr-2" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn btn-danger">
                            Delete Account
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
