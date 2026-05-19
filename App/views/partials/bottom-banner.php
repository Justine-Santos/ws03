<?php
use Framework\Session;
?>

<!-- Bottom Banner -->
<section class="max-w-7xl mx-auto px-4 my-12">

    <div class="relative overflow-hidden rounded-[2rem] bg-gradient-to-r from-indigo-700 via-blue-700 to-purple-700 shadow-2xl">

        <!-- Background Glow -->
        <div class="absolute -top-10 -right-10 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-10 -left-10 w-72 h-72 bg-cyan-300/10 rounded-full blur-3xl"></div>

        <!-- Content -->
        <div class="relative z-10 px-8 py-10 md:px-14 md:py-14">

            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-10">

                <!-- Left Content -->
                <div class="max-w-2xl">

                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/10 text-white px-4 py-2 rounded-full text-sm font-medium mb-5">

                        <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>

                        Hiring Platform

                    </div>

                    <!-- Heading -->
                    <h2 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">

                        Looking for the
                        <span class="text-yellow-300">
                            perfect candidate?
                        </span>

                    </h2>

                    <!-- Description -->
                    <p class="text-indigo-100 text-lg mt-5 leading-relaxed">

                        Post your job listing today and connect with skilled professionals ready to join your company.

                    </p>

                    <!-- Features -->
                    <div class="flex flex-wrap gap-4 mt-8">

                        <div class="bg-white/10 backdrop-blur-sm border border-white/10 px-4 py-2 rounded-xl text-white text-sm font-medium">
                            Fast Hiring
                        </div>

                        <div class="bg-white/10 backdrop-blur-sm border border-white/10 px-4 py-2 rounded-xl text-white text-sm font-medium">
                            Verified Applicants
                        </div>

                        <div class="bg-white/10 backdrop-blur-sm border border-white/10 px-4 py-2 rounded-xl text-white text-sm font-medium">
                            Professional Listings
                        </div>

                    </div>

                </div>

                <!-- Right Content -->
                <div class="flex flex-col items-start lg:items-end gap-5">

                    <!-- Stats Card -->
                    <div class="bg-white/10 backdrop-blur-lg border border-white/10 rounded-3xl px-8 py-6 text-white shadow-xl min-w-[260px]">

                        <p class="text-indigo-100 text-sm mb-2">
                            Start Hiring Smarter
                        </p>

                        <h3 class="text-3xl font-bold">
                            Reach More Talent
                        </h3>

                        <p class="text-indigo-100 mt-3 leading-relaxed">
                            Create a professional listing and attract qualified applicants instantly.
                        </p>

                    </div>

                    <!-- Button -->
                    <?php if(Session::has('user')) : ?>

                    <a
                        href="/listings/create"
                        class="group inline-flex items-center justify-center gap-3 bg-yellow-400 hover:bg-yellow-300 text-black font-bold px-8 py-4 rounded-2xl shadow-2xl hover:scale-105 transition-all duration-300"
                    >

                        <i class="fa fa-edit group-hover:rotate-6 transition-transform duration-300"></i>

                        Post a Job

                    </a>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>

</section>