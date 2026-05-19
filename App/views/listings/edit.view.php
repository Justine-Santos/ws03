<?= loadPartial('head'); ?>
<?= loadPartial('navbar'); ?>

<!-- Background -->
<section class="min-h-screen bg-gradient-to-br from-slate-100 via-white to-blue-50 py-16 px-4">

  <!-- Main Container -->
  <div class="max-w-5xl mx-auto bg-white/90 backdrop-blur-lg border border-gray-200 shadow-2xl rounded-3xl overflow-hidden">

    <!-- Header -->
    <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-10 py-10 text-white">
      <div class="flex items-center justify-between flex-wrap gap-4">
        
        <div>
          <h1 class="text-4xl font-extrabold tracking-tight">
            Edit Job Listing
          </h1>

          <p class="mt-2 text-blue-100 text-lg">
            Update your job post information professionally.
          </p>
        </div>

        <div class="hidden md:flex items-center justify-center w-16 h-16 bg-white/20 rounded-2xl backdrop-blur-sm">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5h2m-1-1v2m-6 9v4h12v-4M5 8h14l-1 8H6L5 8z"/>
          </svg>
        </div>

      </div>
    </div>

    <!-- Form -->
    <form method="POST" action="/listings/<?= $listing->id ?>" class="p-10">

      <input type="hidden" name="_method" value="PUT">

      <?= loadPartial('errors', ['errors' => $errors ?? [] ]) ?>

      <!-- Job Info -->
      <div class="mb-12">

        <div class="flex items-center gap-3 mb-6">
          <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6M7 4h10a2 2 0 012 2v12a2 2 0 01-2 2H7a2 2 0 01-2-2V6a2 2 0 012-2z"/>
            </svg>
          </div>

          <div>
            <h2 class="text-2xl font-bold text-gray-800">
              Job Information
            </h2>

            <p class="text-gray-500 text-sm">
              Modify the details of the position.
            </p>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

          <!-- Job Title -->
          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Job Title
            </label>

            <input
              type="text"
              name="title"
              placeholder="e.g. UI/UX Designer"
              class="w-full px-5 py-3 rounded-2xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition-all duration-300"
              value="<?= $listing->title ?? '' ?>"
            />
          </div>

          <!-- Description -->
          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Job Description
            </label>

            <textarea
              name="description"
              rows="6"
              placeholder="Describe the role responsibilities, expectations, and qualifications..."
              class="w-full px-5 py-3 rounded-2xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition-all duration-300"
            ><?= $listing->description ?? '' ?></textarea>
          </div>

          <!-- Salary -->
          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Annual Salary
            </label>

            <input
              type="text"
              name="salary"
              placeholder="₱40,000 - ₱70,000"
              class="w-full px-5 py-3 rounded-2xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition-all duration-300"
              value="<?= $listing->salary ?? '' ?>"
            />
          </div>

          <!-- Tags -->
          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Tags
            </label>

            <input
              type="text"
              name="tags"
              placeholder="Remote, Full-Time, Hybrid"
              class="w-full px-5 py-3 rounded-2xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition-all duration-300"
              value="<?= $listing->tags ?? '' ?>"
            />
          </div>

          <!-- Requirements -->
          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Requirements
            </label>

            <input
              type="text"
              name="requirements"
              placeholder="Experience, certifications, technical skills..."
              class="w-full px-5 py-3 rounded-2xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition-all duration-300"
              value="<?= $listing->requirements ?? '' ?>"
            />
          </div>

          <!-- Benefits -->
          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Benefits
            </label>

            <input
              type="text"
              name="benefits"
              placeholder="Bonuses, insurance, remote setup..."
              class="w-full px-5 py-3 rounded-2xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition-all duration-300"
              value="<?= $listing->benefits ?? '' ?>"
            />
          </div>

        </div>
      </div>

      <!-- Company Info -->
      <div class="mb-10">

        <div class="flex items-center gap-3 mb-6">
          <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21h18M5 21V7l8-4 8 4v14M9 9h.01M9 13h.01M9 17h.01M15 9h.01M15 13h.01M15 17h.01"/>
            </svg>
          </div>

          <div>
            <h2 class="text-2xl font-bold text-gray-800">
              Company & Location
            </h2>

            <p class="text-gray-500 text-sm">
              Update company and contact information.
            </p>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

          <!-- Company -->
          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Company Name
            </label>

            <input
              type="text"
              name="company"
              placeholder="Company name"
              class="w-full px-5 py-3 rounded-2xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-indigo-100 focus:border-indigo-500 outline-none transition-all duration-300"
              value="<?= $listing->company ?? '' ?>"
            />
          </div>

          <!-- Phone -->
          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Phone Number
            </label>

            <input
              type="text"
              name="phone"
              placeholder="+63 912 345 6789"
              class="w-full px-5 py-3 rounded-2xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-indigo-100 focus:border-indigo-500 outline-none transition-all duration-300"
              value="<?= $listing->phone ?? '' ?>"
            />
          </div>

          <!-- Address -->
          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Address
            </label>

            <input
              type="text"
              name="address"
              placeholder="Street address"
              class="w-full px-5 py-3 rounded-2xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-indigo-100 focus:border-indigo-500 outline-none transition-all duration-300"
              value="<?= $listing->address ?? '' ?>"
            />
          </div>

          <!-- City -->
          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              City
            </label>

            <input
              type="text"
              name="city"
              placeholder="City"
              class="w-full px-5 py-3 rounded-2xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-indigo-100 focus:border-indigo-500 outline-none transition-all duration-300"
              value="<?= $listing->city ?? '' ?>"
            />
          </div>

          <!-- State -->
          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              State / Province
            </label>

            <input
              type="text"
              name="state"
              placeholder="Province"
              class="w-full px-5 py-3 rounded-2xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-indigo-100 focus:border-indigo-500 outline-none transition-all duration-300"
              value="<?= $listing->state ?? '' ?>"
            />
          </div>

          <!-- Email -->
          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Application Email
            </label>

            <input
              type="email"
              name="email"
              placeholder="applications@company.com"
              class="w-full px-5 py-3 rounded-2xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-indigo-100 focus:border-indigo-500 outline-none transition-all duration-300"
              value="<?= $listing->email ?? '' ?>"
            />
          </div>

        </div>
      </div>

      <!-- Buttons -->
      <div class="flex flex-col md:flex-row gap-4 pt-6">

        <button
          class="flex-1 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold px-6 py-4 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300"
        >
          Update Listing
        </button>

        <a
          href="/listings/<?= $listing->id ?>"
          class="flex-1 text-center bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold px-6 py-4 rounded-2xl transition-all duration-300"
        >
          Cancel
        </a>

      </div>

    </form>
  </div>

</section>

<?= loadPartial('bottom-banner'); ?>