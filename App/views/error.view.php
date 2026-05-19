<?= loadPartial('head'); ?>
<?= loadPartial('navbar'); ?>
<?= loadPartial('top-banner'); ?>

<!-- Status Page -->
<section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden py-20">

    <!-- Background -->
    <div class="absolute inset-0">

        <!-- Gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-100 via-white to-indigo-50"></div>

        <!-- Glow Effects -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>

    </div>

    <!-- Content -->
    <div class="relative z-10 w-full max-w-4xl mx-auto px-6">

        <!-- Card -->
        <div class="bg-white border border-gray-200 shadow-2xl rounded-[2rem] overflow-hidden">

            <!-- Top Banner -->
            <div class="bg-gradient-to-r from-indigo-600 via-blue-600 to-purple-600 px-10 py-12 text-center">

                <!-- Icon -->
                <div class="w-24 h-24 mx-auto rounded-3xl bg-white/10 backdrop-blur-md border border-white/10 flex items-center justify-center shadow-2xl mb-6">

                    <?php if(str_contains(strtolower($status), 'success')) : ?>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-green-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>

                    <?php else : ?>

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-red-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M5.07 19h13.86c1.54 0 2.5-1.67 1.73-3L13.73 4c-.77-1.33-2.69-1.33-3.46 0L3.34 16c-.77 1.33.19 3 1.73 3z"/>
                        </svg>

                    <?php endif; ?>

                </div>

                <!-- Status -->
                <h1 class="text-5xl font-extrabold text-white tracking-tight">

                    <?= $status ?>

                </h1>

            </div>

            <!-- Body -->
            <div class="px-10 py-12 text-center">

                <!-- Message -->
                <p class="text-xl text-gray-600 leading-relaxed max-w-2xl mx-auto">

                    <?= $message ?>

                </p>

                <!-- Divider -->
                <div class="w-24 h-1 bg-gradient-to-r from-indigo-500 to-blue-500 rounded-full mx-auto my-10"></div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-5">

                    <!-- Listings -->
                    <a
                        href="/listings"
                        class="inline-flex items-center justify-center gap-3 bg-gradient-to-r from-indigo-500 to-blue-500 hover:from-indigo-600 hover:to-blue-600 text-white font-bold px-8 py-4 rounded-2xl shadow-2xl hover:scale-105 transition-all duration-300"
                    >

                        <i class="fa fa-briefcase"></i>

                        Go Back To Listings

                    </a>

                    <!-- Home -->
                    <a
                        href="/"
                        class="inline-flex items-center justify-center gap-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold px-8 py-4 rounded-2xl transition-all duration-300"
                    >

                        <i class="fa fa-home"></i>

                        Return Home

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<?= loadPartial('footer'); ?>