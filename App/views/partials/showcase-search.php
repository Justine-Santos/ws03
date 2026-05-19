<!-- Hero Section -->
<section class="relative overflow-hidden min-h-[650px] flex items-center justify-center">

    <!-- Background -->
    <div class="absolute inset-0">

        <!-- Background Image -->
        <div 
            class="absolute inset-0 bg-cover bg-center scale-105"
            style="background-image: url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=2070&auto=format&fit=crop');"
        ></div>

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-950/90 via-indigo-950/80 to-blue-950/80"></div>

        <!-- Glow Effects -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-indigo-500/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>

    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 py-20 w-full">

        <div class="max-w-4xl mx-auto text-center">

            <!-- Badge -->
            <div class="inline-flex items-center gap-3 bg-white/10 border border-white/10 backdrop-blur-md text-white px-5 py-3 rounded-full text-sm font-medium mb-8 shadow-xl">

                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>

                Trusted Professional Hiring Platform

            </div>

            <!-- Heading -->
            <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight tracking-tight">

                Find Your
                <span class="bg-gradient-to-r from-blue-400 to-indigo-300 bg-clip-text text-transparent">
                    Dream Job
                </span>

            </h1>

            <!-- Subtitle -->
            <p class="text-lg md:text-2xl text-indigo-100 mt-8 leading-relaxed max-w-3xl mx-auto">

                Discover thousands of opportunities from top companies and take the next step toward your future career.

            </p>

            <!-- Search Box -->
            <div class="mt-14">

                <form 
                    method="GET"
                    action="/listings/search"
                    class="bg-white/10 border border-white/10 backdrop-blur-2xl rounded-[2rem] p-5 shadow-2xl"
                >

                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-4">

                        <!-- Keywords -->
                        <div class="lg:col-span-5">

                            <div class="relative">

                                <div class="absolute left-5 top-1/2 -translate-y-1/2 text-gray-400">
                                    <i class="fa fa-briefcase"></i>
                                </div>

                                <input
                                    type="text"
                                    name="keywords"
                                    placeholder="Job title, skills, or keywords"
                                    class="w-full bg-white border border-gray-200 rounded-2xl pl-14 pr-5 py-5 text-gray-800 placeholder-gray-400 focus:ring-4 focus:ring-indigo-200 focus:border-indigo-500 outline-none shadow-sm"
                                />

                            </div>

                        </div>

                        <!-- Location -->
                        <div class="lg:col-span-4">

                            <div class="relative">

                                <div class="absolute left-5 top-1/2 -translate-y-1/2 text-gray-400">
                                    <i class="fa fa-location-dot"></i>
                                </div>

                                <input
                                    type="text"
                                    name="location"
                                    placeholder="City or location"
                                    class="w-full bg-white border border-gray-200 rounded-2xl pl-14 pr-5 py-5 text-gray-800 placeholder-gray-400 focus:ring-4 focus:ring-indigo-200 focus:border-indigo-500 outline-none shadow-sm"
                                />

                            </div>

                        </div>

                        <!-- Button -->
                        <div class="lg:col-span-3">

                            <button
                                class="w-full h-full bg-gradient-to-r from-indigo-500 to-blue-500 hover:from-indigo-600 hover:to-blue-600 text-white font-bold px-6 py-5 rounded-2xl shadow-xl hover:shadow-2xl hover:scale-[1.02] transition-all duration-300 flex items-center justify-center gap-3"
                            >

                                <i class="fa fa-search"></i>

                                Search Jobs

                            </button>

                        </div>

                    </div>

                </form>

            </div>

            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-16">

                <!-- Card -->
                <div class="bg-white/10 border border-white/10 backdrop-blur-md rounded-3xl p-6 shadow-xl">

                    <h3 class="text-4xl font-extrabold text-white">
                        10K+
                    </h3>

                    <p class="text-indigo-100 mt-2">
                        Active Job Listings
                    </p>

                </div>

                <!-- Card -->
                <div class="bg-white/10 border border-white/10 backdrop-blur-md rounded-3xl p-6 shadow-xl">

                    <h3 class="text-4xl font-extrabold text-white">
                        5K+
                    </h3>

                    <p class="text-indigo-100 mt-2">
                        Trusted Companies
                    </p>

                </div>

                <!-- Card -->
                <div class="bg-white/10 border border-white/10 backdrop-blur-md rounded-3xl p-6 shadow-xl">

                    <h3 class="text-4xl font-extrabold text-white">
                        25K+
                    </h3>

                    <p class="text-indigo-100 mt-2">
                        Successful Hires
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>