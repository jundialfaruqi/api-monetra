<x-layout>
    <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
        <div>
            <h1 class="text-xl font-bold">Role & Permission</h1>
            <p class="text-sm text-base-content/60 mt-1">Kelola role dan permission</p>
        </div>
        <div class="text-sm breadcrumbs text-base-content/60">
            <ul>
                <li><a>Monetra</a></li>
                <li><a>Apps</a></li>
                <li><span class="text-base-content">Role & Permission</span></li>
            </ul>
        </div>
    </div>

    <div class="mb-6">
        <div class="rounded-xl bg-linear-to-r from-primary to-secondary text-primary-content p-5">
            <div class="flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
                <div>
                    <div class="text-lg font-bold">Manajemen Akses</div>
                    <div class="text-sm opacity-80">Data role dan permission</div>
                </div>
                <div class="flex flex-wrap gap-4 md:gap-0 mt-1 md:mt-0">
                    <div class="text-center">
                        <div class="text-2xl font-bold">{{ $stats['roles'] ?? 0 }}</div>
                        <div class="text-xs">Roles</div>
                    </div>
                    <div class="text-center md:pl-6 md:ml-6 md:border-l md:border-dotted md:border-white/40">
                        <div class="text-2xl font-bold">{{ $stats['permissions'] ?? 0 }}</div>
                        <div class="text-xs">Permissions</div>
                    </div>
                    <div class="text-center md:pl-6 md:ml-6 md:border-l md:border-dotted md:border-white/40">
                        <div class="text-2xl font-bold">{{ $stats['new_permissions'] ?? 0 }}</div>
                        <div class="text-xs">Permission Baru</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4">
            <div class="card bg-base-100 shadow-sm">
                <div class="card-body p-5">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="card-title text-sm text-base-content/60 font-medium">Total Role & Permission</h2>
                            <div class="flex items-center gap-2 mt-2">
                                <span class="text-2xl font-bold">{{ $stats['total'] ?? 0 }}</span>
                                <span class="text-xs text-base-content/50">Role & Permission</span>
                            </div>
                        </div>
                        <div class="p-2 bg-base-200 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 14c3.866 0 7 1.343 7 3v1H5v-1c0-1.657 3.134-3 7-3z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 12a4 4 0 100-8 4 4 0 000 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-sm">
                <div class="card-body p-5">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="card-title text-sm text-base-content/60 font-medium">Role Terbanyak Digunakan
                            </h2>
                            <div class="flex items-center gap-2 mt-2">
                                <span class="text-2xl font-bold">{{ $stats['top_role_users'] ?? 0 }}</span>
                                <span class="text-xs text-success">Pengguna Role
                                    {{ ucfirst($stats['top_role_name'] ?? '-') }}</span>
                            </div>
                        </div>
                        <div class="p-2 bg-base-200 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 3v18h18M9 13v5m4-9v9m4-13v13" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-sm">
                <div class="card-body p-5">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="card-title text-sm text-base-content/60 font-medium">User</h2>
                            <div class="flex items-center gap-2 mt-2">
                                <span class="text-2xl font-bold">{{ $stats['user_role_count'] ?? 0 }}</span>
                                <span class="text-xs text-warning">Pengguna</span>
                            </div>
                        </div>
                        <div class="p-2 bg-base-200 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 14c3.866 0 7 1.343 7 3v1H5v-1c0-1.657 3.134-3 7-3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 12a4 4 0 100-8 4 4 0 000 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-sm">
                <div class="card-body p-5">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="card-title text-sm text-base-content/60 font-medium">Super Admin</h2>
                            <div class="flex items-center gap-2 mt-2">
                                <span class="text-2xl font-bold">{{ $stats['superadmin_role_count'] ?? 0 }}</span>
                                <span class="text-xs text-error">Pengguna</span>
                            </div>
                        </div>
                        <div class="p-2 bg-base-200 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M9 12l2 2 4-4M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col sm:flex-row justify-between gap-4 mb-6">
        <div class="form-control">
            <div class="flex flex-col sm:flex-row items-center gap-3">
                <form method="GET" action="{{ route('role_permission.index') }}" class="flex items-center gap-2">
                    <div class="join">
                        <span
                            class="btn btn-disabled join-item text-base-content pointer-events-none rounded-left-md">Show</span>
                        <select name="per_page" class="select join-item w-24 rounded-end-md"
                            onchange="this.form.submit()">
                            @php $pp = (int) request('per_page', 10); @endphp
                            <option value="10" @selected($pp === 10)>10</option>
                            <option value="20" @selected($pp === 20)>20</option>
                            <option value="50" @selected($pp === 50)>50</option>
                            <option value="100" @selected($pp === 100)>100</option>
                        </select>
                    </div>
                    <input type="hidden" name="q" value="{{ request('q') }}">
                </form>
                <div class="relative w-full sm:w-auto">
                    <input id="rp-search-input" type="text" placeholder="Search..." value="{{ request('q') }}"
                        class="input input-bordered rounded-md w-full sm:max-w-xs pl-10 pr-10 bg-base-100" />
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-base-content/50" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </span>
                    <button type="button" id="rp-search-clear"
                        class="absolute inset-y-0 right-0 flex items-center pr-3 text-base-content/50">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <div id="rp-search-suggestions"
                        class="absolute mt-1 w-full bg-base-100 rounded-md shadow z-10 hidden"></div>
                </div>
            </div>
        </div>
        <div class="flex gap-2">
            <button type="button" id="btn-add-permission" class="btn btn-primary gap-2 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Add Permission
            </button>
            <button type="button" id="btn-add-role" class="btn btn-secondary gap-2 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Add Role
            </button>
        </div>
    </div>

    <div class="pb-4 px-4">
        <div class="text-sm text-base-content/60 font-medium">Roles</div>
    </div>

    <div class="card bg-base-100 shadow-sm mb-6">
        <div class="card-body p-0">
            <div class="overflow-x-auto">
                <table class="table table-zebra w-full">
                    <thead>
                        <tr class="bg-base-200/50">
                            <th>#</th>
                            <th>Name</th>
                            <th>Guard</th>
                            <th>Created At</th>
                            <th class="text-center">Permissions</th>
                            <th class="text-center">Users</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($roles as $r)
                            <tr class="hover:bg-base-200/50">
                                <td class="text-sm">{{ $roles->firstItem() + $loop->index }}</td>
                                <td class="text-sm">{{ $r->name }}</td>
                                <td class="text-sm">{{ $r->guard_name }}</td>
                                <td class="text-sm font-mono text-base-content/60">
                                    {{ $r->created_at->format('d-m-Y H:i:s') }}
                                </td>
                                <td class="text-sm text-center">
                                    {{ $r->permissions_count }}
                                </td>
                                <td class="text-sm text-center">{{ $r->users_count }}</td>
                                <td class="text-center">
                                    <div class="dropdown dropdown-end">
                                        <button class="btn btn-ghost btn-xs btn-square rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                            </svg>
                                        </button>
                                        <ul tabindex="0"
                                            class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-36">
                                            <li>
                                                <button type="button" data-edit-role="{{ $r->id }}"
                                                    data-name="{{ $r->name }}"
                                                    data-guard="{{ $r->guard_name }}"
                                                    data-permission-ids="{{ $r->permissions->pluck('id')->implode(',') }}">
                                                    Edit
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="text-error rp-delete-btn"
                                                    data-type="role" data-id="{{ $r->id }}"
                                                    data-name="{{ $r->name }}">
                                                    Delete
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-sm text-base-content/60">Tidak ada role
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-actions justify-between items-center p-4 border-t border-base-200">
                <div class="w-full">{!! $roles->links() !!}</div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <div class="pb-4 px-4">
            <div class="text-sm text-base-content/60 font-medium">Permissions</div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach ($permissionGroups ?? [] as $grp)
                <div class="card bg-base-100 shadow-sm">
                    <div class="card-body p-0">
                        <div class="p-4">
                            <div class="text-xs font-semibold uppercase text-base-content/60">
                                {{ $grp['name'] ?? 'Ungrouped' }}</div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="table table-zebra w-full">
                                <thead>
                                    <tr class="bg-base-200/50">
                                        <th>Name</th>
                                        <th>Guard</th>
                                        <th class="text-end"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($grp['items'] as $p)
                                        <tr>
                                            <td class="text-sm">{{ $p->name }}</td>
                                            <td class="text-sm">{{ $p->guard_name }}</td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-end">
                                                    <button class="btn btn-ghost btn-xs btn-square rounded-full">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                                        </svg>
                                                    </button>
                                                    <ul tabindex="0"
                                                        class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-36">
                                                        <li>
                                                            <button type="button"
                                                                data-edit-permission="{{ $p->id }}"
                                                                data-name="{{ $p->name }}"
                                                                data-group="{{ $p->group }}"
                                                                data-guard="{{ $p->guard_name }}">
                                                                Edit
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" class="text-error rp-delete-btn"
                                                                data-type="permission" data-id="{{ $p->id }}"
                                                                data-name="{{ $p->name }}">
                                                                Delete
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center text-sm text-base-content/60">Tidak
                                                ada permission</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="card-actions justify-between items-center p-4 border-t border-base-200 mt-auto">
                            <div class="w-full">{!! $grp['items']->links() !!}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <dialog id="permission-modal" class="modal">
        <div class="modal-box">
            <h3 class="font-bold text-lg mb-4">Permission</h3>
            <form id="permission-form" method="POST" action="{{ route('permissions.store') }}">
                @csrf
                <input type="hidden" name="_method" id="permission-method" value="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">

                    <div class="form-control md:col-span-2 mb-2">
                        <label class="label mb-2">
                            <span class="label-text">Name</span>
                        </label>
                        <input type="text" name="name" id="permission-name"
                            class="input input-bordered w-full">
                    </div>

                    <div class="form-control md:col-span-2 mb-2">
                        <label class="label mb-2">
                            <span class="label-text">Group</span>
                        </label>
                        <input type="text" name="group" id="permission-group"
                            class="input input-bordered w-full">
                    </div>

                    <div class="form-control md:col-span-2 mb-2">
                        <label class="label mb-2">
                            <span class="label-text">Guard Name</span>
                        </label>
                        <input type="text" name="guard_name" id="permission-guard" value="web"
                            class="input input-bordered w-full">
                    </div>

                </div>

                <div class="modal-action">
                    <button type="button" class="btn" data-close="permission-modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </dialog>

    <dialog id="role-modal" class="modal">
        <div class="modal-box">
            <h3 class="font-bold text-lg mb-4">Role</h3>
            <form id="role-form" method="POST" action="{{ route('roles.store') }}">
                @csrf
                <input type="hidden" name="_method" id="role-method" value="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <div class="form-control mb-2">
                        <label class="label mb-2"><span class="label-text">Name</span></label>
                        <input type="text" name="name" id="role-name" class="input input-bordered">
                    </div>
                    <div class="form-control mb-2">
                        <label class="label mb-2"><span class="label-text">Guard Name</span></label>
                        <input type="text" name="guard_name" id="role-guard" class="input input-bordered"
                            value="web">
                    </div>
                    <div class="form-control md:col-span-2">
                        <label class="label mb-2"><span class="label-text">Permissions</span></label>
                        <div class="max-h-64 overflow-auto">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                @foreach (($allPermissions ?? collect())->groupBy('group') as $groupName => $groupList)
                                    <div class="border border-base-300 rounded-md p-2">
                                        <div class="text-xs font-semibold uppercase text-base-content/60 mb-2">
                                            {{ $groupName ?? 'Ungrouped' }}</div>
                                        <div class="grid grid-cols-2 gap-2">
                                            @foreach ($groupList as $p)
                                                <label class="flex items-center gap-2">
                                                    <input type="checkbox" name="permission_ids[]"
                                                        value="{{ $p->id }}" class="checkbox checkbox-sm">
                                                    <span class="text-sm">{{ $p->name }}</span>
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-action">
                    <button type="button" class="btn" data-close="role-modal">Batal</button>
                    <button type="submit" class="btn btn-secondary">Simpan</button>
                </div>
            </form>
        </div>
    </dialog>

    <dialog id="rp-delete-modal" class="modal">
        <div class="modal-box">
            <h3 class="font-bold text-lg mb-2">Konfirmasi Hapus</h3>
            <p class="text-sm text-base-content/70">Apakah Anda yakin ingin menghapus <span id="rp-delete-name"
                    class="font-semibold"></span>?</p>
            <div class="modal-action">
                <button type="button" class="btn" data-close="rp-delete-modal">Batal</button>
                <form id="rp-delete-form" method="POST" action="#">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-error">Hapus</button>
                </form>
            </div>
        </div>
    </dialog>

    <script>
        document.getElementById('btn-add-permission')?.addEventListener('click', function() {
            document.getElementById('permission-form').action = "{{ route('permissions.store') }}";
            document.getElementById('permission-method').value = 'POST';
            document.getElementById('permission-name').value = '';
            document.getElementById('permission-group').value = '';
            document.getElementById('permission-guard').value = 'web';
            document.getElementById('permission-modal').showModal();
        });
        document.getElementById('btn-add-role')?.addEventListener('click', function() {
            document.getElementById('role-form').action = "{{ route('roles.store') }}";
            document.getElementById('role-method').value = 'POST';
            document.getElementById('role-name').value = '';
            document.getElementById('role-guard').value = 'web';
            document.querySelectorAll('#role-form input[type=checkbox]').forEach(cb => cb.checked = false);
            document.getElementById('role-modal').showModal();
        });
        document.querySelectorAll('button[data-edit-permission]')?.forEach(btn => {
            btn.addEventListener('click', function() {
                const id = this.dataset.editPermission;
                document.getElementById('permission-form').action = "{{ url('/permissions') }}/" + id;
                document.getElementById('permission-method').value = 'PUT';
                document.getElementById('permission-name').value = this.dataset.name || '';
                document.getElementById('permission-group').value = this.dataset.group || '';
                document.getElementById('permission-guard').value = this.dataset.guard || 'web';
                document.getElementById('permission-modal').showModal();
            });
        });
        document.querySelectorAll('button[data-edit-role]')?.forEach(btn => {
            btn.addEventListener('click', function() {
                const id = this.dataset.editRole;
                document.getElementById('role-form').action = "{{ url('/roles') }}/" + id;
                document.getElementById('role-method').value = 'PUT';
                document.getElementById('role-name').value = this.dataset.name || '';
                document.getElementById('role-guard').value = this.dataset.guard || 'web';
                document.querySelectorAll('#role-form input[type=checkbox]').forEach(cb => cb.checked =
                    false);
                const ids = (this.dataset.permissionIds || '').split(',').map(s => s.trim()).filter(
                    Boolean);
                if (ids.length) {
                    const set = new Set(ids);
                    document.querySelectorAll('#role-form input[type=checkbox][name="permission_ids[]"]')
                        .forEach(cb => {
                            if (set.has(cb.value)) cb.checked = true;
                        });
                }
                document.getElementById('role-modal').showModal();
            });
        });
        document.querySelectorAll('button[data-close]')?.forEach(btn => {
            btn.addEventListener('click', function() {
                const id = this.getAttribute('data-close');
                document.getElementById(id)?.close();
            });
        });
        document.querySelectorAll('.rp-delete-btn')?.forEach(btn => {
            btn.addEventListener('click', function() {
                const type = this.dataset.type;
                const id = this.dataset.id;
                const name = this.dataset.name || '';
                const form = document.getElementById('rp-delete-form');
                const modal = document.getElementById('rp-delete-modal');
                document.getElementById('rp-delete-name').textContent = name;
                if (type === 'permission') {
                    form.action = "{{ url('/permissions') }}/" + id;
                } else {
                    form.action = "{{ url('/roles') }}/" + id;
                }
                modal.showModal();
            });
        });
        document.getElementById('rp-search-input')?.addEventListener('keyup', function(e) {
            if (e.key === 'Enter') {
                const params = new URLSearchParams(window.location.search);
                params.set('q', this.value);
                window.location.href = "{{ route('role_permission.index') }}?" + params.toString();
            }
        });
        document.getElementById('rp-search-clear')?.addEventListener('click', function() {
            const params = new URLSearchParams(window.location.search);
            params.delete('q');
            window.location.href = "{{ route('role_permission.index') }}?" + params.toString();
        });
        (function() {
            const input = document.getElementById('rp-search-input');
            const box = document.getElementById('rp-search-suggestions');
            const clearBtn = document.getElementById('rp-search-clear');
            let timer = null;

            function hide() {
                box.classList.add('hidden');
                box.innerHTML = '';
            }

            function updateClear() {
                const has = input.value.trim().length > 0;
                if (has) clearBtn.classList.remove('hidden');
                else clearBtn.classList.add('hidden');
            }

            function show(items) {
                let html = '';
                if (!items.length) {
                    html = '<div class="p-3 text-sm text-base-content/60">Tidak ada data</div>';
                } else {
                    html = '<ul class="menu menu-sm w-full">' + items.map(i =>
                        '<li><button type="button" data-q="' + encodeURIComponent(i.query) + '">' +
                        '<div class="flex flex-col text-left">' +
                        '<span class="font-medium">' + (i.name ?? '') + '</span>' +
                        '<span class="text-xs opacity-60">' + [i.group, i.guard].filter(Boolean).join(' • ') +
                        '</span>' +
                        '</div></button></li>'
                    ).join('') + '</ul>';
                }
                box.innerHTML = html;
                box.classList.remove('hidden');
            }

            function search(q) {
                if (!q) {
                    hide();
                    updateClear();
                    return;
                }
                fetch(`{{ route('permissions.suggest') }}?q=` + encodeURIComponent(q), {
                        headers: {
                            'Accept': 'application/json'
                        }
                    })
                    .then(r => r.json())
                    .then(d => {
                        const items = (d.data || []).map(p => ({
                            name: p.name,
                            group: p.group,
                            guard: p.guard,
                            query: p.name || q
                        }));
                        show(items);
                    })
                    .catch(() => show([]));
            }
            input.addEventListener('input', function() {
                clearTimeout(timer);
                const q = this.value.trim();
                timer = setTimeout(() => search(q), 200);
                updateClear();
            });
            box.addEventListener('mousedown', function(e) {
                const btn = e.target.closest('button[data-q]');
                if (!btn) return;
                const q = decodeURIComponent(btn.getAttribute('data-q') || '');
                const url = new URL(window.location.href);
                url.searchParams.set('q', q);
                window.location = url.toString();
            });
        })();
    </script>
</x-layout>
