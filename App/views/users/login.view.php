<?= loadPartial('head'); ?>
<?= loadPartial('navbar'); ?>

<!-- Login Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden py-20">

    <!-- Background -->
    <div class="absolute inset-0">

        <!-- Main Gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-indigo-950 to-blue-950"></div>

        <!-- Glow Effects -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-indigo-500/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>

        <!-- Grid Pattern -->
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

                    Welcome Back to JobSeek

                </div>

                <!-- Heading -->
                <h1 class="text-6xl font-extrabold leading-tight tracking-tight">

                    Continue Your
                    <span class="bg-gradient-to-r from-blue-400 to-indigo-300 bg-clip-text text-transparent">
                        Career Journey
                    </span>

                </h1>

                <!-- Description -->
                <p class="text-xl text-indigo-100 mt-8 leading-relaxed max-w-xl">

                    Access your account, manage applications, and discover exciting opportunities from top employers worldwide.

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
                                Discover New Jobs
                            </h3>

                            <p class="text-indigo-100 mt-1">
                                Browse professional opportunities tailored to your skills and interests.
                            </p>

                        </div>

                    </div>

                    <!-- Feature -->
                    <div class="flex items-start gap-4 bg-white/5 border border-white/10 backdrop-blur-md rounded-3xl p-5">

                        <div class="w-14 h-14 rounded-2xl bg-blue-500/20 flex items-center justify-center text-blue-300 text-xl">

                            <i class="fa fa-building"></i>

                        </div>

                        <div>

                            <h3 class="text-lg font-bold">
                                Trusted Employers
                            </h3>

                            <p class="text-indigo-100 mt-1">
                                Connect with verified companies actively hiring professionals.
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
                                Grow Professionally
                            </h3>

                            <p class="text-indigo-100 mt-1">
                                Take the next step toward your long-term career success.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Login Card -->
            <div class="w-full">

                <div class="bg-white/10 border border-white/10 backdrop-blur-2xl shadow-2xl rounded-[2rem] overflow-hidden">

                    <!-- Header -->
                    <div class="px-8 pt-10 text-center">

                        <div class="w-20 h-20 mx-auto rounded-3xl bg-gradient-to-br from-indigo-500 to-blue-500 flex items-center justify-center shadow-2xl mb-6">

                            <i class="fa fa-lock text-white text-3xl"></i>

                        </div>

                        <h2 class="text-4xl font-extrabold text-white">
                            Welcome Back
                        </h2>

                        <p class="text-indigo-100 mt-3 text-lg">
                            Login to continue your professional journey.
                        </p>

                    </div>

                    <!-- Form -->
                    <div class="p-8">

                        <?= loadPartial('errors', ['errors' => $errors ?? [] ]) ?>

                        <form method="POST" action="/auth/login" class="space-y-6">

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
                                        class="w-full bg-white border border-gray-200 rounded-2xl pl-14 pr-5 py-4 text-gray-800 placeholder-gray-400 focus:ring-4 focus:ring-indigo-200 focus:border-indigo-500 outline-none shadow-sm"
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
                                        placeholder="Enter your password"
                                        class="w-full bg-white border border-gray-200 rounded-2xl pl-14 pr-5 py-4 text-gray-800 placeholder-gray-400 focus:ring-4 focus:ring-indigo-200 focus:border-indigo-500 outline-none shadow-sm"
                                    />

                                </div>

                            </div>

                            <!-- Options -->
                            <div class="flex items-center justify-between text-sm">

                                <label class="flex items-center gap-2 text-indigo-100 cursor-pointer">

                                    <input 
                                        type="checkbox"
                                        class="rounded border-gray-300 text-indigo-500 focus:ring-indigo-500"
                                    >

                                    Remember me

                                </label>

                                <a
                                    href="#"
                                    class="text-blue-300 hover:text-white transition duration-300"
                                >
                                    Forgot Password?
                                </a>

                            </div>

                            <!-- Login Button -->
                            <button
                                type="submit"
                                class="w-full bg-gradient-to-r from-indigo-500 to-blue-500 hover:from-indigo-600 hover:to-blue-600 text-white font-bold px-6 py-4 rounded-2xl shadow-2xl hover:shadow-indigo-500/30 hover:scale-[1.01] transition-all duration-300 flex items-center justify-center gap-3"
                            >

                                <i class="fa fa-sign-in-alt"></i>

                                Login

                            </button>

                        </form>

                        <!-- Register -->
                        <div class="mt-8 text-center">

                            <p class="text-indigo-100">

                                Don't have an account?

                                <a
                                    href="/auth/register"
                                    class="font-semibold text-white hover:text-blue-300 transition duration-300"
                                >
                                    Register
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