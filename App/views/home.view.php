<?= loadPartial('head'); ?>
<?= loadPartial('navbar'); ?>
<?= loadPartial('showcase-search'); ?>
<?= loadPartial('top-banner'); ?>

<!-- Recent Jobs Section -->
<section class="relative py-20 overflow-hidden">

    <!-- Background -->
    <div class="absolute inset-0 bg-gradient-to-b from-slate-50 via-white to-indigo-50"></div>

    <!-- Glow Effects -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center mb-16">

            <!-- Badge -->
            <div class="inline-flex items-center gap-3 bg-indigo-100 text-indigo-700 px-5 py-3 rounded-full text-sm font-semibold shadow-sm mb-6">

                <span class="w-2 h-2 bg-indigo-500 rounded-full animate-pulse"></span>

                Latest Career Opportunities

            </div>

            <!-- Heading -->
            <h2 class="text-5xl md:text-6xl font-extrabold tracking-tight text-gray-900">

                Recent
                <span class="bg-gradient-to-r from-indigo-500 to-blue-500 bg-clip-text text-transparent">
                    Jobs
                </span>

            </h2>

            <!-- Subtitle -->
            <p class="text-lg md:text-xl text-gray-600 mt-6 max-w-3xl mx-auto leading-relaxed">

                Discover the newest professional opportunities from trusted employers and start building your future today.

            </p>

        </div>

        <!-- Listings Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">

            <?php foreach($listings as $listing) : ?>

            <!-- Job Card -->
            <div class="group bg-white border border-gray-200 rounded-[2rem] shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 overflow-hidden">

                <!-- Top Accent -->
                <div class="h-2 bg-gradient-to-r from-indigo-500 via-blue-500 to-purple-500"></div>

                <div class="p-8">

                    <!-- Company Badge -->
                    <div class="flex items-center justify-between mb-6">

                        <div class="flex items-center gap-4">

                            <!-- Icon -->
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-indigo-500 to-blue-500 flex items-center justify-center shadow-lg">

                                <i class="fa fa-briefcase text-white text-xl"></i>

                            </div>

                            <!-- Company -->
                            <div>

                                <p class="text-xs uppercase tracking-wide text-gray-400 font-semibold">
                                    Company
                                </p>

                                <h3 class="font-bold text-gray-800 text-lg">
                                    <?= $listing->company ?>
                                </h3>

                            </div>

                        </div>

                        <!-- Status -->
                        <span class="bg-green-100 text-green-700 text-xs font-bold px-4 py-2 rounded-full">
                            Hiring
                        </span>

                    </div>

                    <!-- Job Title -->
                    <h2 class="text-2xl font-extrabold text-gray-900 leading-tight mb-4 group-hover:text-indigo-600 transition duration-300">

                        <?= $listing->title ?>

                    </h2>

                    <!-- Description -->
                    <p class="text-gray-600 leading-relaxed line-clamp-4 min-h-[110px]">

                        <?= $listing->description ?>

                    </p>

                    <!-- Info Box -->
                    <div class="bg-slate-50 border border-gray-100 rounded-3xl p-5 mt-6 space-y-4">

                        <!-- Salary -->
                        <div class="flex items-center gap-3">

                            <div class="w-10 h-10 rounded-xl bg-green-100 flex items-center justify-center text-green-600">

                                <i class="fa fa-money-bill-wave"></i>

                            </div>

                            <div>

                                <p class="text-xs text-gray-400 font-medium">
                                    Salary
                                </p>

                                <p class="font-bold text-gray-800">
                                    <?= formatSalary($listing->salary) ?>
                                </p>

                            </div>

                        </div>

                        <!-- Location -->
                        <div class="flex items-center gap-3">

                            <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600">

                                <i class="fa fa-location-dot"></i>

                            </div>

                            <div>

                                <p class="text-xs text-gray-400 font-medium">
                                    Location
                                </p>

                                <p class="font-bold text-gray-800">

                                    <?= $listing->city ?>, <?= $listing->state ?>

                                </p>

                            </div>

                        </div>

                        <!-- Tags -->
                        <?php if(!empty($listing->tags)) : ?>

                        <div class="pt-2">

                            <p class="text-xs text-gray-400 font-medium mb-3">
                                Skills & Tags
                            </p>

                            <div class="flex flex-wrap gap-2">

                                <?php foreach(explode(',', $listing->tags) as $tag) : ?>

                                <span class="bg-indigo-100 text-indigo-700 text-xs font-semibold px-3 py-2 rounded-full">

                                    <?= trim($tag) ?>

                                </span>

                                <?php endforeach; ?>

                            </div>

                        </div>

                        <?php endif; ?>

                    </div>

                    <!-- Button -->
                    <a
                        href="/listings/<?= $listing->id ?>"
                        class="mt-8 inline-flex items-center justify-center gap-3 w-full bg-gradient-to-r from-indigo-500 to-blue-500 hover:from-indigo-600 hover:to-blue-600 text-white font-bold px-6 py-4 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300"
                    >

                        <i class="fa fa-arrow-right"></i>

                        View Details

                    </a>

                </div>

            </div>

            <?php endforeach; ?>

        </div>

        <!-- View All -->
        <div class="text-center mt-16">

            <a
                href="/listings"
                class="inline-flex items-center gap-4 bg-white border border-gray-200 hover:border-indigo-300 hover:shadow-xl text-gray-800 hover:text-indigo-600 font-bold px-8 py-5 rounded-2xl transition-all duration-300"
            >

                <i class="fa fa-briefcase"></i>

                Show All Jobs

                <i class="fa fa-arrow-right"></i>

            </a>

        </div>

    </div>

</section>

<?= loadPartial('bottom-banner'); ?>
<?= loadPartial('footer'); ?>