<?= loadPartial('head'); ?>
<?= loadPartial('navbar'); ?>

<!-- Register Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden py-20">

    <!-- Background -->
    <div class="absolute inset-0">

        <!-- Gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-indigo-950 to-blue-950"></div>

        <!-- Glow Effects -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-indigo-500/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>

        <!-- Grid Overlay -->
        <div class="absolute inset-0 opacity-[0.05]">
            <div 
                class="h-full w-full"
                style="background-image: linear-gradient(to right, white 1px, transparent 1px), linear-gradient(to bottom, white 1px, transparent 1px); background-size: 50px 50px;"
            ></div>
        </div>

    </div>

    <!-- Content -->
    <div class="relative z-10 w-full max-w-6xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

            <!-- Left Side -->
            <div class="text-white hidden lg:block">

                <!-- Badge -->
                <div class="inline-flex items-center gap-3 bg-white/10 border border-white/10 backdrop-blur-md px-5 py-3 rounded-full text-sm font-medium mb-8 shadow-xl">

                    <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>

                    Join Thousands of Professionals

                </div>

                <!-- Heading -->
                <h1 class="text-6xl font-extrabold leading-tight tracking-tight">

                    Build Your
                    <span class="bg-gradient-to-r from-blue-400 to-indigo-300 bg-clip-text text-transparent">
                        Career Future
                    </span>

                </h1>

                <!-- Description -->
                <p class="text-xl text-indigo-100 mt-8 leading-relaxed max-w-xl">

                    Create your JobSeek account and unlock access to premium job opportunities, top employers, and professional career growth.

                </p>

                <!-- Features -->
                <div class="grid grid-cols-1 gap-5 mt-12">

                    <!-- Feature -->
                    <div class="flex items-start gap-4 bg-white/5 border border-white/10 backdrop-blur-md rounded-3xl p-5">

                        <div class="w-14 h-14 rounded-2xl bg-indigo-500/20 flex items-center justify-center text-indigo-300 text-xl">

                            <i class="fa fa-briefcase"></i>

                        </div>

                        <div>

                            <h3 class="text-lg font-bold">
                                Explore Opportunities
                            </h3>

                            <p class="text-indigo-100 mt-1">
                                Browse thousands of active job listings from trusted companies.
                            </p>

                        </div>

                    </div>

                    <!-- Feature -->
                    <div class="flex items-start gap-4 bg-white/5 border border-white/10 backdrop-blur-md rounded-3xl p-5">

                        <div class="w-14 h-14 rounded-2xl bg-blue-500/20 flex items-center justify-center text-blue-300 text-xl">

                            <i class="fa fa-user-check"></i>

                        </div>

                        <div>

                            <h3 class="text-lg font-bold">
                                Verified Employers
                            </h3>

                            <p class="text-indigo-100 mt-1">
                                Apply confidently to companies actively hiring professionals.
                            </p>

                        </div>

                    </div>

                    <!-- Feature -->
                    <div class="flex items-start gap-4 bg-white/5 border border-white/10 backdrop-blur-md rounded-3xl p-5">

                        <div class="w-14 h-14 rounded-2xl bg-purple-500/20 flex items-center justify-center text-purple-300 text-xl">

                            <i class="fa fa-chart-line"></i>

                        </div>

                        <div>

                            <h3 class="text-lg font-bold">
                                Career Growth
                            </h3>

                            <p class="text-indigo-100 mt-1">
                                Connect with opportunities that match your skills and ambitions.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Register Card -->
            <div class="w-full">

                <div class="bg-white/10 border border-white/10 backdrop-blur-2xl shadow-2xl rounded-[2rem] overflow-hidden">

                    <!-- Card Header -->
                    <div class="px-8 pt-10 text-center">

                        <div class="w-20 h-20 mx-auto rounded-3xl bg-gradient-to-br from-indigo-500 to-blue-500 flex items-center justify-center shadow-2xl mb-6">

                            <i class="fa fa-user-plus text-white text-3xl"></i>

                        </div>

                        <h2 class="text-4xl font-extrabold text-white">
                            Create Account
                        </h2>

                        <p class="text-indigo-100 mt-3 text-lg">
                            Start your professional journey with JobSeek.
                        </p>

                    </div>

                    <!-- Form -->
                    <div class="p-8">

                        <?= loadPartial('errors', ['errors' => $errors ?? [] ]) ?>

                        <form method="POST" action="/auth/register" class="space-y-5">

                            <!-- Full Name -->
                            <div>

                                <label class="block text-sm font-medium text-indigo-100 mb-2">
                                    Full Name
                                </label>

                                <div class="relative">

                                    <div class="absolute left-5 top-1/2 -translate-y-1/2 text-gray-400">
                                        <i class="fa fa-user"></i>
                                    </div>

                                    <input
                                        type="text"
                                        name="name"
                                        placeholder="Enter your full name"
                                        value="<?= $user['name'] ?? '' ?>"
                                        class="w-full bg-white border border-gray-200 rounded-2xl pl-14 pr-5 py-4 text-gray-800 placeholder-gray-400 focus:ring-4 focus:ring-indigo-200 focus:border-indigo-500 outline-none shadow-sm"
                                    />

                                </div>

                            </div>

                            <!-- Email -->
                            <div>

                                <label class="block text-sm font-medium text-indigo-100 mb-2">
                                    Email Address
                                </label>

                                <div class="relative">

                                    <div class="absolute left-5 top-1/2 -translate-y-1/2 text-gray-400">
                                        <i class="fa fa-envelope"></i>
                                    </div>

                                    <input
                                        type="email"
                                        name="email"
                                        placeholder="Enter your email"
                                        value="<?= $user['email'] ?? '' ?>"
                                        class="w-full bg-white border border-gray-200 rounded-2xl pl-14 pr-5 py-4 text-gray-800 placeholder-gray-400 focus:ring-4 focus:ring-indigo-200 focus:border-indigo-500 outline-none shadow-sm"
                                    />

                                </div>

                            </div>

                            <!-- City & State -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                                <!-- City -->
                                <div>

                                    <label class="block text-sm font-medium text-indigo-100 mb-2">
                                        City
                                    </label>

                                    <input
                                        type="text"
                                        name="city"
                                        placeholder="City"
                                        value="<?= $user['city'] ?? '' ?>"
                                        class="w-full bg-white border border-gray-200 rounded-2xl px-5 py-4 text-gray-800 placeholder-gray-400 focus:ring-4 focus:ring-indigo-200 focus:border-indigo-500 outline-none shadow-sm"
                                    />

                                </div>

                                <!-- State -->
                                <div>

                                    <label class="block text-sm font-medium text-indigo-100 mb-2">
                                        State
                                    </label>

                                    <input
                                        type="text"
                                        name="state"
                                        placeholder="State"
                                        value="<?= $user['state'] ?? '' ?>"
                                        class="w-full bg-white border border-gray-200 rounded-2xl px-5 py-4 text-gray-800 placeholder-gray-400 focus:ring-4 focus:ring-indigo-200 focus:border-indigo-500 outline-none shadow-sm"
                                    />

                                </div>

                            </div>

                            <!-- Password -->
                            <div>

                                <label class="block text-sm font-medium text-indigo-100 mb-2">
                                    Password
                                </label>

                                <div class="relative">

                                    <div class="absolute left-5 top-1/2 -translate-y-1/2 text-gray-400">
                                        <i class="fa fa-lock"></i>
                                    </div>

                                    <input
                                        type="password"
                                        name="password"
                                        placeholder="Create a password"
                                        class="w-full bg-white border border-gray-200 rounded-2xl pl-14 pr-5 py-4 text-gray-800 placeholder-gray-400 focus:ring-4 focus:ring-indigo-200 focus:border-indigo-500 outline-none shadow-sm"
                                    />

                                </div>

                            </div>

                            <!-- Confirm Password -->
                            <div>

                                <label class="block text-sm font-medium text-indigo-100 mb-2">
                                    Confirm Password
                                </label>

                                <div class="relative">

                                    <div class="absolute left-5 top-1/2 -translate-y-1/2 text-gray-400">
                                        <i class="fa fa-shield-alt"></i>
                                    </div>

                                    <input
                                        type="password"
                                        name="password_confirmation"
                                        placeholder="Confirm your password"
                                        class="w-full bg-white border border-gray-200 rounded-2xl pl-14 pr-5 py-4 text-gray-800 placeholder-gray-400 focus:ring-4 focus:ring-indigo-200 focus:border-indigo-500 outline-none shadow-sm"
                                    />

                                </div>

                            </div>

                            <!-- Button -->
                            <button
                                type="submit"
                                class="w-full bg-gradient-to-r from-indigo-500 to-blue-500 hover:from-indigo-600 hover:to-blue-600 text-white font-bold px-6 py-4 rounded-2xl shadow-2xl hover:shadow-indigo-500/30 hover:scale-[1.01] transition-all duration-300 flex items-center justify-center gap-3"
                            >

                                <i class="fa fa-user-plus"></i>

                                Create Account

                            </button>

                        </form>

                        <!-- Footer -->
                        <div class="mt-8 text-center">

                            <p class="text-indigo-100">

                                Already have an account?

                                <a
                                    href="/auth/login"
                                    class="font-semibold text-white hover:text-blue-300 transition duration-300"
                                >
                                    Login
                                </a>

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?= loadPartial('footer'); ?>