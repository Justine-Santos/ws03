<?= loadPartial('head'); ?>
<?= loadPartial('navbar'); ?>
<?= loadPartial('top-banner'); ?>

<!-- Job Listings -->
<section class="min-h-screen bg-gradient-to-br from-slate-100 via-white to-indigo-50 py-12">

    <div class="max-w-7xl mx-auto px-4">

        <!-- Header -->
        <div class="bg-white border border-gray-200 shadow-xl rounded-3xl p-8 mb-8">

            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">

                <div>
                    <h1 class="text-4xl font-extrabold text-gray-800 tracking-tight">
                        <?php if(isset($keywords)) : ?>
                            Search Results
                        <?php else : ?>
                            Explore Jobs
                        <?php endif; ?>
                    </h1>

                    <p class="text-gray-500 mt-2 text-lg">
                        <?php if(isset($keywords)) : ?>
                            Showing matches for:
                            <span class="font-semibold text-indigo-600">
                                "<?= htmlspecialchars($keywords) ?>"
                            </span>
                        <?php else : ?>
                            Discover career opportunities from top companies.
                        <?php endif; ?>
                    </p>
                </div>

                <!-- Job Count -->
                <div class="bg-indigo-50 border border-indigo-100 px-6 py-4 rounded-2xl">
                    <p class="text-sm text-gray-500">Available Jobs</p>
                    <h2 class="text-3xl font-bold text-indigo-600">
                        <?= count($listings) ?>
                    </h2>
                </div>

            </div>

        </div>

        <!-- Messages -->
        <?= loadPartial('message') ?>

        <?php if(isset($_SESSION['success_message'])) : ?>
            <div class="mb-6 bg-green-100 border border-green-200 text-green-700 px-5 py-4 rounded-2xl shadow-sm">
                <?= $_SESSION['success_message'] ?>
            </div>

            <?php unset($_SESSION['success_message']); ?>
        <?php endif; ?>

        <!-- Listings Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">

            <?php foreach($listings as $listing) : ?>

            <!-- Job Card -->
            <div class="group bg-white border border-gray-200 rounded-3xl overflow-hidden shadow-md hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">

                <!-- Top Accent -->
                <div class="h-2 bg-gradient-to-r from-indigo-500 via-blue-500 to-purple-500"></div>

                <div class="p-6">

                    <!-- Company Badge -->
                    <div class="flex items-center justify-between mb-5">

                        <div class="flex items-center gap-3">

                            <div class="w-12 h-12 rounded-2xl bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold text-lg">
                                <?= strtoupper(substr($listing->company ?? 'J', 0, 1)) ?>
                            </div>

                            <div>
                                <p class="font-semibold text-gray-800">
                                    <?= $listing->company ?? 'Company' ?>
                                </p>

                                <p class="text-sm text-gray-500">
                                    Hiring Now
                                </p>
                            </div>

                        </div>

                        <span class="text-xs bg-green-100 text-green-700 px-3 py-1 rounded-full font-medium">
                            Active
                        </span>

                    </div>

                    <!-- Job Title -->
                    <h2 class="text-2xl font-bold text-gray-800 mb-3 line-clamp-1">
                        <?= $listing->title ?>
                    </h2>

                    <!-- Description -->
                    <p class="text-gray-600 leading-relaxed mb-6 line-clamp-3">
                        <?= $listing->description ?>
                    </p>

                    <!-- Info Box -->
                    <div class="bg-gray-50 border border-gray-100 rounded-2xl p-5 mb-6 space-y-4">

                        <!-- Salary -->
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500 font-medium">
                                Salary
                            </span>

                            <span class="font-bold text-emerald-600">
                                <?= formatSalary($listing->salary) ?>
                            </span>
                        </div>

                        <!-- Location -->
                        <div class="flex items-center justify-between">
                            <span class="text-gray-500 font-medium">
                                Location
                            </span>

                            <div class="flex items-center gap-2">

                                <span class="text-gray-700 font-medium">
                                    <?= $listing->city ?>, <?= $listing->state ?>
                                </span>

                                <span class="text-xs bg-blue-500 text-white rounded-full px-2 py-1">
                                    Local
                                </span>

                            </div>
                        </div>

                        <!-- Tags -->
                        <?php if(!empty($listing->tags)) : ?>

                        <div>
                            <p class="text-gray-500 font-medium mb-2">
                                Tags
                            </p>

                            <div class="flex flex-wrap gap-2">

                                <?php foreach(explode(',', $listing->tags) as $tag) : ?>

                                <span class="bg-indigo-100 text-indigo-700 text-xs px-3 py-1 rounded-full font-medium">
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
                        class="group-hover:scale-[1.02] block w-full text-center bg-gradient-to-r from-indigo-600 to-blue-600 hover:from-indigo-700 hover:to-blue-700 text-white font-semibold px-5 py-3 rounded-2xl shadow-lg transition-all duration-300"
                    >
                        View Details
                    </a>

                </div>

            </div>

            <?php endforeach; ?>

        </div>

        <!-- Empty State -->
        <?php if(empty($listings)) : ?>

        <div class="bg-white border border-gray-200 rounded-3xl shadow-lg p-16 text-center mt-10">

            <div class="w-24 h-24 mx-auto bg-gray-100 rounded-full flex items-center justify-center mb-6">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L15 12l-5.25-5"/>
                </svg>

            </div>

            <h2 class="text-3xl font-bold text-gray-800 mb-3">
                No Jobs Found
            </h2>

            <p class="text-gray-500 text-lg">
                Try searching with different keywords or check back later.
            </p>

        </div>

        <?php endif; ?>

    </div>

</section>

<?= loadPartial('bottom-banner'); ?>
<?= loadPartial('footer'); ?>