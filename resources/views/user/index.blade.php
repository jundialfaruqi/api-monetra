<x-layout>
    <!-- Page Title & Breadcrumbs -->
    <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
        <div>
            <h1 class="text-xl font-bold">User Management</h1>
            <p class="text-sm text-base-content/60 mt-1">Manage users, roles, and permissions</p>
        </div>
        <div class="text-sm breadcrumbs text-base-content/60">
            <ul>
                <li><a>Monetra</a></li>
                <li><a>Apps</a></li>
                <li><span class="text-base-content">User Management</span></li>
            </ul>
        </div>
    </div>

    <!-- Actions Toolbar -->
    <div class="flex flex-col sm:flex-row justify-between gap-4 mb-6">
        <div class="form-control">
            <div class="input-group">
                <div class="relative">
                    <input type="text" placeholder="Search users..."
                        class="input input-bordered rounded-md w-full max-w-xs pl-10 bg-base-100" />
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-base-content/50" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
        <div class="flex gap-2">
            <button class="btn btn-outline gap-2 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                </svg>
                Filter
            </button>
            <button class="btn btn-primary gap-2 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
                Add User
            </button>
        </div>
    </div>

    <!-- Users Table Card -->
    <div class="card bg-base-100 shadow-sm">
        <div class="card-body p-0">
            <div class="overflow-x-auto">
                <table class="table table-zebra w-full">
                    <!-- head -->
                    <thead>
                        <tr class="bg-base-200/50">
                            <th>
                                <label>
                                    <input type="checkbox" class="checkbox checkbox-sm" />
                                </label>
                            </th>
                            <th>User</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Last Active</th>
                            <th>Joined Date</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr>
                            <th>
                                <label>
                                    <input type="checkbox" class="checkbox checkbox-sm" />
                                </label>
                            </th>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle w-10 h-10">
                                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                                                alt="Avatar" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">Emma Smith</div>
                                        <div class="text-xs opacity-50">emma.smith@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="badge badge-primary badge-outline gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                                    </svg>
                                    Administrator
                                </div>
                            </td>
                            <td>
                                <div class="badge badge-success gap-1 text-white">
                                    <div class="w-1.5 h-1.5 rounded-full bg-white"></div>
                                    Active
                                </div>
                            </td>
                            <td class="text-sm">2 mins ago</td>
                            <td class="text-sm">Oct 24, 2023</td>
                            <td class="text-right">
                                <button class="btn btn-ghost btn-xs btn-square">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr>
                            <th>
                                <label>
                                    <input type="checkbox" class="checkbox checkbox-sm" />
                                </label>
                            </th>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle w-10 h-10">
                                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                                                alt="Avatar" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">Liam Johnson</div>
                                        <div class="text-xs opacity-50">liam.j@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="badge badge-ghost badge-outline gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                    Editor
                                </div>
                            </td>
                            <td>
                                <div class="badge badge-warning gap-1 text-white">
                                    <div class="w-1.5 h-1.5 rounded-full bg-white"></div>
                                    Pending
                                </div>
                            </td>
                            <td class="text-sm">5 hours ago</td>
                            <td class="text-sm">Nov 12, 2023</td>
                            <td class="text-right">
                                <button class="btn btn-ghost btn-xs btn-square">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr>
                            <th>
                                <label>
                                    <input type="checkbox" class="checkbox checkbox-sm" />
                                </label>
                            </th>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle w-10 h-10">
                                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                                                alt="Avatar" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">Olivia Williams</div>
                                        <div class="text-xs opacity-50">olivia.w@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="badge badge-ghost badge-outline gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                    Viewer
                                </div>
                            </td>
                            <td>
                                <div class="badge badge-error gap-1 text-white">
                                    <div class="w-1.5 h-1.5 rounded-full bg-white"></div>
                                    Inactive
                                </div>
                            </td>
                            <td class="text-sm">3 days ago</td>
                            <td class="text-sm">Dec 01, 2023</td>
                            <td class="text-right">
                                <button class="btn btn-ghost btn-xs btn-square">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr>
                            <th>
                                <label>
                                    <input type="checkbox" class="checkbox checkbox-sm" />
                                </label>
                            </th>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle w-10 h-10">
                                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                                                alt="Avatar" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">Noah Brown</div>
                                        <div class="text-xs opacity-50">noah.b@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="badge badge-primary badge-outline gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                                    </svg>
                                    Administrator
                                </div>
                            </td>
                            <td>
                                <div class="badge badge-success gap-1 text-white">
                                    <div class="w-1.5 h-1.5 rounded-full bg-white"></div>
                                    Active
                                </div>
                            </td>
                            <td class="text-sm">1 day ago</td>
                            <td class="text-sm">Jan 15, 2024</td>
                            <td class="text-right">
                                <button class="btn btn-ghost btn-xs btn-square">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr>
                            <th>
                                <label>
                                    <input type="checkbox" class="checkbox checkbox-sm" />
                                </label>
                            </th>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle w-10 h-10">
                                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                                                alt="Avatar" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">Sophia Miller</div>
                                        <div class="text-xs opacity-50">sophia.m@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="badge badge-ghost badge-outline gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                    Editor
                                </div>
                            </td>
                            <td>
                                <div class="badge badge-success gap-1 text-white">
                                    <div class="w-1.5 h-1.5 rounded-full bg-white"></div>
                                    Active
                                </div>
                            </td>
                            <td class="text-sm">Just now</td>
                            <td class="text-sm">Feb 20, 2024</td>
                            <td class="text-right">
                                <button class="btn btn-ghost btn-xs btn-square">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    <!-- foot -->
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>User</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Last Active</th>
                            <th>Joined Date</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        <div class="card-actions justify-between items-center p-4 border-t border-base-200">
            <div class="text-sm text-base-content/60">Showing 1 to 5 of 24 entries</div>
            <div class="join">
                <button class="join-item btn btn-sm">«</button>
                <button class="join-item btn btn-sm">Page 1</button>
                <button class="join-item btn btn-sm">»</button>
            </div>
        </div>
    </div>
</x-layout>
