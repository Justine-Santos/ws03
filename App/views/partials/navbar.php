<?php
use Framework\Session;
?>

<!-- Navbar -->
<header class="sticky top-0 z-50 backdrop-blur-xl bg-slate-950/80 border-b border-white/10 shadow-lg">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <a href="/" class="flex items-center gap-4 group">

                <!-- Logo Icon -->
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-indigo-500 via-blue-500 to-purple-500 flex items-center justify-center shadow-xl group-hover:scale-105 transition-all duration-300">

                    <span class="text-white text-2xl font-extrabold">
                        J
                    </span>

                </div>

                <!-- Logo Text -->
                <div>

                    <h1 class="text-2xl font-extrabold tracking-tight text-white">
                        JobSeek
                    </h1>

                    <p class="text-xs text-indigo-200 -mt-1">
                        Professional Hiring Platform
                    </p>

                </div>

            </a>

            <!-- Navigation -->
            <nav class="flex items-center gap-4">

                <?php if(Session::has('user')) : ?>

                <!-- User Menu -->
                <div class="flex items-center gap-4">

                    <!-- Welcome Card -->
                    <div class="hidden md:flex items-center gap-3 bg-white/5 border border-white/10 backdrop-blur-md rounded-2xl px-4 py-2">

                        <!-- Avatar -->
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-500 to-blue-500 flex items-center justify-center text-white font-bold">

                            <?= strtoupper(substr(Session::get('user')['name'], 0, 1)) ?>

                        </div>

                        <!-- Name -->
                        <div>

                            <p class="text-xs text-gray-400">
                                Welcome Back
                            </p>

                            <p class="text-sm font-semibold text-white">
                                <?= Session::get('user')['name'] ?>
                            </p>

                        </div>

                    </div>

                    <!-- Post Job Button -->
                    <a
                        href="/listings/create"
                        class="inline-flex items-center gap-3 bg-gradient-to-r from-yellow-400 to-amber-400 hover:from-yellow-300 hover:to-amber-300 text-black font-bold px-5 py-3 rounded-2xl shadow-xl hover:scale-105 transition-all duration-300"
                    >

                        <i class="fa fa-plus"></i>

                        <span class="hidden sm:inline">
                            Post a Job
                        </span>

                    </a>

                    <!-- Logout -->
                    <form method="POST" action="/auth/logout">

                        <button
                            type="submit"
                            class="inline-flex items-center gap-2 bg-red-500/10 hover:bg-red-500 text-red-300 hover:text-white border border-red-500/20 px-5 py-3 rounded-2xl font-semibold transition-all duration-300"
                        >

                            <i class="fa fa-sign-out-alt"></i>

                            <span class="hidden sm:inline">
                                Logout
                            </span>

                        </button>

                    </form>

                </div>

                <?php else: ?>

                <!-- Guest Navigation -->
                <div class="flex items-center gap-3">

                    <!-- Login -->
                    <a
                        href="/auth/login"
                        class="text-gray-300 hover:text-white font-medium px-4 py-2 rounded-xl hover:bg-white/5 transition-all duration-300"
                    >
                        Login
                    </a>

                    <!-- Register -->
                    <a
                        href="/auth/register"
                        class="bg-gradient-to-r from-indigo-500 to-blue-500 hover:from-indigo-600 hover:to-blue-600 text-white font-semibold px-5 py-3 rounded-2xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300"
                    >
                        Register
                    </a>

                </div>

                <?php endif; ?>

            </nav>

        </div>

    </div>

</header>