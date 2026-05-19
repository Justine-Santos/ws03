<?= loadPartial('head'); ?>
<?= loadPartial('navbar'); ?>
<?= loadPartial('top-banner'); ?>

<section class="min-h-screen bg-gradient-to-br from-slate-100 via-white to-indigo-50 py-12">

  <div class="max-w-7xl mx-auto px-4">

    <?= loadPartial('message') ?>

    <!-- Back + Actions -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">

      <a 
        class="inline-flex items-center gap-2 text-indigo-600 hover:text-indigo-800 font-semibold transition"
        href="/listings"
      >
        <i class="fa fa-arrow-alt-circle-left"></i>
        Back To Listings
      </a>

      <?php if(Framework\Authorization::isOwner($listing->user_id)) : ?>

      <div class="flex gap-3">

        <a 
          href="/listings/edit/<?= $listing->id ?>"
          class="px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-xl shadow-md transition-all duration-300"
        >
          Edit
        </a>

        <!-- Delete Form -->
        <form method="POST">

          <input type="hidden" name="_method" value="DELETE">

          <button 
            type="submit"
            class="px-5 py-2.5 bg-red-500 hover:bg-red-600 text-white rounded-xl shadow-md transition-all duration-300"
          >
            Delete
          </button>

        </form>
        <!-- End Delete Form -->

      </div>

      <?php endif; ?>

    </div>

    <!-- Main Job Card -->
    <div class="bg-white rounded-3xl shadow-2xl border border-gray-200 overflow-hidden">

      <!-- Top Banner -->
      <div class="bg-gradient-to-r from-indigo-600 via-blue-600 to-purple-600 px-8 py-10 text-white">

        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">

          <!-- Left -->
          <div>

            <div class="flex items-center gap-4 mb-4">

              <div class="w-16 h-16 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center text-2xl font-bold">
                <?= strtoupper(substr($listing->company ?? 'J', 0, 1)) ?>
              </div>

              <div>
                <p class="text-lg font-medium text-indigo-100">
                  <?= $listing->company ?? 'Company' ?>
                </p>

                <div class="flex items-center gap-2 mt-1">

                  <span class="bg-green-400/20 text-green-100 text-xs px-3 py-1 rounded-full border border-green-300/20">
                    Hiring Now
                  </span>

                  <span class="bg-white/10 text-white text-xs px-3 py-1 rounded-full">
                    Local
                  </span>

                </div>
              </div>

            </div>

            <h1 class="text-4xl font-extrabold leading-tight">
              <?= $listing->title ?>
            </h1>

            <p class="text-indigo-100 mt-4 text-lg leading-relaxed max-w-3xl">
              <?= $listing->description ?>
            </p>

          </div>

          <!-- Salary Card -->
          <div class="bg-white/10 backdrop-blur-md border border-white/10 rounded-3xl p-6 min-w-[250px]">

            <p class="text-indigo-100 text-sm mb-2">
              Annual Salary
            </p>

            <h2 class="text-3xl font-bold">
              <?= formatSalary($listing->salary) ?>
            </h2>

            <div class="mt-5">

              <p class="text-sm text-indigo-100">
                Location
              </p>

              <p class="font-semibold text-lg">
                <?= $listing->city ?>, <?= $listing->state ?>
              </p>

            </div>

          </div>

        </div>

      </div>

      <!-- Content -->
      <div class="p-8">

        <!-- Tags -->
        <?php if(!empty($listing->tags)) : ?>

        <div class="mb-10">

          <h3 class="text-lg font-bold text-gray-800 mb-4">
            Skills & Tags
          </h3>

          <div class="flex flex-wrap gap-3">

            <?php foreach(explode(',', $listing->tags) as $tag) : ?>

            <span class="bg-indigo-100 text-indigo-700 text-sm font-medium px-4 py-2 rounded-full">
              <?= trim($tag) ?>
            </span>

            <?php endforeach; ?>

          </div>

        </div>

        <?php endif; ?>

        <!-- Job Details -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

          <!-- Requirements -->
          <div class="bg-gray-50 border border-gray-100 rounded-3xl p-8">

            <div class="flex items-center gap-3 mb-5">

              <div class="w-12 h-12 rounded-2xl bg-blue-100 flex items-center justify-center">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>

              </div>

              <h3 class="text-2xl font-bold text-gray-800">
                Requirements
              </h3>

            </div>

            <p class="text-gray-600 leading-relaxed text-lg">
              <?= $listing->requirements ?>
            </p>

          </div>

          <!-- Benefits -->
          <div class="bg-gray-50 border border-gray-100 rounded-3xl p-8">

            <div class="flex items-center gap-3 mb-5">

              <div class="w-12 h-12 rounded-2xl bg-green-100 flex items-center justify-center">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.567-3 3.5S10.343 15 12 15s3-1.567 3-3.5S13.657 8 12 8z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v2m0 14v2m9-9h-2M5 12H3"/>
                </svg>

              </div>

              <h3 class="text-2xl font-bold text-gray-800">
                Benefits
              </h3>

            </div>

            <p class="text-gray-600 leading-relaxed text-lg">
              <?= $listing->benefits ?>
            </p>

          </div>

        </div>

        <!-- Application Section -->
        <div class="mt-12 bg-gradient-to-r from-indigo-600 to-blue-600 rounded-3xl p-10 text-white">

          <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">

            <!-- Left -->
            <div>

              <h2 class="text-3xl font-bold mb-3">
                Ready to Apply?
              </h2>

              <p class="text-indigo-100 text-lg leading-relaxed max-w-2xl">
                Put
                <span class="font-semibold text-white">
                  "Job Application"
                </span>
                as the subject of your email and attach your updated resume.
              </p>

            </div>

            <!-- Button -->
            <div class="min-w-[260px]">

              <a
                href="mailto:<?= $listing->email ?>"
                class="block text-center bg-white hover:bg-gray-100 text-indigo-700 font-bold px-6 py-4 rounded-2xl shadow-xl transition-all duration-300"
              >
                Apply Now
              </a>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>

<?= loadPartial('bottom-banner'); ?>
<?= loadPartial('footer'); ?>