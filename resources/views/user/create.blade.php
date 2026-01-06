<x-layout>
    <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
        <div>
            <h1 class="text-xl font-bold">Create User</h1>
            <p class="text-sm text-base-content/60 mt-1">Tambah pengguna baru</p>
        </div>
        <div class="text-sm breadcrumbs text-base-content/60">
            <ul>
                <li><a href="{{ route('dashboard.index') }}">Monetra</a></li>
                <li><a href="{{ route('users.index') }}">Users</a></li>
                <li><span class="text-base-content">Create</span></li>
            </ul>
        </div>
    </div>
    @if (session('success') || session('error'))
        <div class="toast toast-top toast-end z-50">
            @if (session('success'))
                <div class="alert alert-success">
                    <span>{{ session('success') }}</span>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-error">
                    <span>{{ session('error') }}</span>
                </div>
            @endif
        </div>
    @endif
    <div class="card bg-base-100 shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="label"><span class="label-text mb-2">Name</span></label>
                        <input name="name" type="text" value="{{ old('name') }}"
                            class="input input-bordered w-full">
                        @error('name')
                            <div class="mt-1 text-xs text-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="label"><span class="label-text mb-2">Email</span></label>
                        <input name="email" type="email" value="{{ old('email') }}"
                            class="input input-bordered w-full">
                        @error('email')
                            <div class="mt-1 text-xs text-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="label"><span class="label-text mb-2">Password</span></label>
                        <input name="password" type="password" class="input input-bordered w-full" minlength="6">
                        @error('password')
                            <div class="mt-1 text-xs text-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="label"><span class="label-text mb-2">Status</span></label>
                        <select name="status" class="select select-bordered w-full">
                            <option value="active" @selected(old('status') === 'active')>Active</option>
                            <option value="pending" @selected(old('status') === 'pending')>Pending</option>
                            <option value="inactive" @selected(old('status') === 'inactive')>Inactive</option>
                        </select>
                        @error('status')
                            <div class="mt-1 text-xs text-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="label"><span class="label-text mb-2">Role</span></label>
                        <select name="role" class="select select-bordered w-full">
                            <option value="">Tidak ada</option>
                            @foreach ($roles ?? [] as $r)
                                <option value="{{ $r }}" @selected(old('role') === $r)>{{ $r }}
                                </option>
                            @endforeach
                        </select>
                        @error('role')
                            <div class="mt-1 text-xs text-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="label"><span class="label-text mb-2">Phone (opsional)</span></label>
                        <input name="phone" type="text" value="{{ old('phone') }}"
                            class="input input-bordered w-full">
                        @error('phone')
                            <div class="mt-1 text-xs text-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="md:col-span-2">
                        <label class="label"><span class="label-text mb-2">Address (opsional)</span></label>
                        <input name="address" type="text" value="{{ old('address') }}"
                            class="input input-bordered w-full">
                        @error('address')
                            <div class="mt-1 text-xs text-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label class="label"><span class="label-text mb-2">Photo (jpg, jpeg, png, webp; max
                            800KB)</span></label>
                    <div id="dropzone"
                        class="relative rounded-lg border-dashed border-2 border-base-300 bg-base-200/50 p-4 cursor-pointer min-h-36">
                        <input id="photo-input" name="photo" type="file" accept=".jpg,.jpeg,.png,.webp"
                            class="hidden">
                        <div id="placeholder"
                            class="flex flex-col items-center justify-center gap-3 text-base-content/60">
                            <img src="{{ asset('assets/images/illustrations/undraw_upload_cucu.svg') }}"
                                alt="Upload illustration" class="w-24 h-24">
                            <span>Drag & drop atau klik untuk pilih gambar</span>
                        </div>
                        <div id="preview" class="absolute inset-0 hidden items-center justify-center">
                            <div class="avatar">
                                <div class="mask mask-squircle w-24 h-24">
                                    <img id="preview-img" src="" alt="Preview">
                                </div>
                            </div>
                        </div>
                    </div>
                    @error('photo')
                        <div class="mt-1 text-xs text-error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex justify-end gap-2">
                    <a href="{{ route('users.index') }}" class="btn">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        (function() {
            const dz = document.getElementById('dropzone');
            const input = document.getElementById('photo-input');
            const preview = document.getElementById('preview');
            const placeholder = document.getElementById('placeholder');
            const img = document.getElementById('preview-img');
            dz.addEventListener('click', () => input.click());
            dz.addEventListener('dragover', e => {
                e.preventDefault();
                dz.classList.add('border-primary');
            });
            dz.addEventListener('dragleave', () => dz.classList.remove('border-primary'));
            dz.addEventListener('drop', e => {
                e.preventDefault();
                dz.classList.remove('border-primary');
                if (e.dataTransfer.files && e.dataTransfer.files[0]) {
                    input.files = e.dataTransfer.files;
                    updatePreview();
                }
            });
            input.addEventListener('change', updatePreview);

            function updatePreview() {
                const file = input.files?.[0];
                if (!file) return;
                const allowed = ['image/jpeg', 'image/png', 'image/webp'];
                if (!allowed.includes(file.type)) {
                    alert('Format gambar harus jpg, jpeg, png, atau webp');
                    input.value = '';
                    return;
                }
                if (file.size > 800 * 1024) {
                    alert('Ukuran gambar maksimal 800KB');
                    input.value = '';
                    return;
                }
                const url = URL.createObjectURL(file);
                img.src = url;
                preview.classList.remove('hidden');
                preview.classList.add('flex');
                placeholder.classList.add('hidden');
            }
        })();
    </script>
</x-layout>
