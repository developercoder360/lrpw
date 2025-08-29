<x-layouts.app>
    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-md border border-gray-200 dark:border-gray-700 mb-8">
        <form action="{{ route('users.update', $user->id) }}" method="POST" class="p-8 space-y-10">
            @csrf
            @method('PUT')

            <!-- User Information -->
            <section>
                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 flex items-center gap-2 mb-6">
                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A13.937 13.937 0 0112 15c2.485 0 4.79.755 6.879 2.046M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    User Profile
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <x-forms.input label="Name" name="name" placeholder="Enter name" value="{{ $user->name }}" />
                    <x-forms.input label="Email" name="email" placeholder="Enter email"
                        value="{{ $user->email }}" />
                </div>
            </section>

            <!-- Security Section -->
            <section>
                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 flex items-center gap-2 mb-6">
                    <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 11c0-1.657-1.343-3-3-3S6 9.343 6 11s1.343 3 3 3 3-1.343 3-3zM12 11v10m0-10a9 9 0 100 18 9 9 0 000-18z" />
                    </svg>
                    Security
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <x-forms.input type="password" label="Password" name="password" placeholder="Enter new password" />
                    <x-forms.select label="Role" name="role" :options="$roles" optionKey="name"
                        value="{{ $user->roles->pluck('name')->first() }}" optionValue="name" />
                </div>
            </section>

            <!-- Permissions Section -->
            <section>
                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 flex items-center gap-2 mb-6">
                    <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m-7-8h8m2 12a2 2 0 002-2V6a2 2 0 00-2-2H7l-4 4v10a2 2 0 002 2h12z" />
                    </svg>
                    Custom Permissions
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($permissions as $permission)
                        <label
                            class="flex items-center p-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition">
                            <x-forms.checkbox label="{{ $permission->name }}" name="permissions[{{ $permission->id }}]"
                                :checked="$user->permissions->contains($permission->id)" value="{{ $permission->name }}" />
                            <span class="ml-2 text-sm text-gray-700 dark:text-gray-300">{{ $permission->name }}</span>
                        </label>
                    @endforeach
                </div>
                @error('permissions.*')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </section>

            <!-- Sticky Actions -->
            <div
                class="sticky bottom-0 bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 pt-4 flex justify-end gap-4">
                <a href="{{ route('users.index') }}"
                    class="px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                    Cancel
                </a>
                <x-buttons.primary type="submit">
                    Update User
                </x-buttons.primary>
            </div>
        </form>
    </div>
</x-layouts.app>
