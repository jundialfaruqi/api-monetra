<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Monetra Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-base-200 min-h-screen flex items-center justify-center font-sans text-base-content">
    <div class="w-full max-w-sm p-6">
        <!-- Logo -->
        <div class="flex justify-center mb-8">
            <div class="flex items-center gap-2 text-primary font-bold text-3xl">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10">
                    <path fill-rule="evenodd"
                        d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z"
                        clip-rule="evenodd" />
                </svg>
                <span>Monetra</span>
            </div>
        </div>

        <div class="card bg-base-100 shadow-xl border border-base-200 rounded-2xl">
            <div class="card-body">
                <div class="text-center mb-6">
                    <h2 class="text-2xl font-bold">Welcome Back</h2>
                    <p class="text-base-content/60 text-sm mt-1">Enter your credentials to access your account</p>
                </div>

                <form action="{{ url('/dashboard') }}" method="GET">
                    <!-- Email -->
                    <div class="form-control mb-4">
                        <label class="label mb-2">
                            <span class="label-text font-medium">Email Address</span>
                        </label>
                        <div class="relative">
                            <input type="email" placeholder="name@example.com"
                                class="input input-bordered w-full pl-10 rounded-lg h-11" required />
                            <span
                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-base-content/60">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path
                                        d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                    <path
                                        d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                </svg>
                            </span>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="form-control mb-6">
                        <label class="label mb-2">
                            <span class="label-text font-medium">Password</span>
                        </label>
                        <div class="relative">
                            <input type="password" placeholder="••••••••"
                                class="input input-bordered w-full pl-10 rounded-lg h-11" required />
                            <span
                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-base-content/60">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                        <label class="label justify-end mt-2">
                            <a href="#" class="label-text-alt link link-hover text-primary font-medium">
                                Forgot password?
                            </a>
                        </label>
                    </div>

                    <!-- Submit -->
                    <div class="form-control">
                        <button type="submit"
                            class="btn btn-primary w-full text-white shadow-lg shadow-primary/30 rounded-lg gap-2">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                            </svg>
                            Sign In
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Version -->
        <div class="text-center mt-8 text-xs text-base-content/40">
            <p class="font-medium">Monetra Web App</p>
            <p>Version 1.0.0</p>
        </div>
    </div>
</body>

</html>
