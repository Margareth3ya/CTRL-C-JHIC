<!-- resources/views/admin/users/edit.blade.php -->
@extends('admin.layout')

@section('title', 'Edit User')

@section('content')
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit User</h2>

        @if(isset($user) && $user)
            <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                        <input type="text" name="username" id="username" required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2"
                            value="{{ old('username', $user->username) }}">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email (opsional)</label>
                        <input type="email" name="email" id="email"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2"
                            value="{{ old('email', $user->email) }}">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password (biarkan kosong jika
                            tidak ingin mengubah)</label>
                        <input type="password" name="password" id="password"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2"
                            placeholder="Masukkan password baru">
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <a href="{{ route('admin.users.index') }}"
                        class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg">
                        Batal
                    </a>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">
                        Update
                    </button>
                </div>
            </form>
        @else
            <div class="text-center py-8">
                <p class="text-red-500 text-lg">User tidak ditemukan.</p>
                <a href="{{ route('admin.users.index') }}"
                    class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">
                    Kembali ke Daftar User
                </a>
            </div>
        @endif
    </div>
@endsection