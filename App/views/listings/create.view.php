<?= loadPartial('head'); ?>
<?= loadPartial('navbar'); ?>

<!-- Background -->
<section class="min-h-screen bg-gradient-to-br from-slate-100 via-white to-emerald-50 py-16 px-4">
  
  <!-- Form Container -->
  <div class="max-w-5xl mx-auto bg-white/90 backdrop-blur-md border border-gray-200 shadow-2xl rounded-3xl overflow-hidden">

    <!-- Header -->
    <div class="bg-gradient-to-r from-emerald-600 to-green-500 px-10 py-10 text-white">
      <h1 class="text-4xl font-extrabold tracking-tight">
        Create Job Listing
      </h1>
      <p class="mt-2 text-green-100 text-lg">
        Publish a professional job opportunity for applicants.
      </p>
    </div>

    <!-- Form -->
    <form method="POST" action="/listings" class="p-10">

      <?= loadPartial('errors', ['errors' => $errors ?? [] ]) ?>

      <!-- Job Information -->
      <div class="mb-10">
        <div class="flex items-center gap-3 mb-6">
          <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6M7 4h10a2 2 0 012 2v12a2 2 0 01-2 2H7a2 2 0 01-2-2V6a2 2 0 012-2z"/>
            </svg>
          </div>

          <div>
            <h2 class="text-2xl font-bold text-gray-800">
              Job Information
            </h2>
            <p class="text-gray-500 text-sm">
              Fill in the details about the position.
            </p>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Job Title
            </label>

            <input
              type="text"
              name="title"
              placeholder="e.g. Frontend Developer"
              class="w-full px-5 py-3 rounded-xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-emerald-100 focus:border-emerald-500 outline-none transition"
              value="<?= $listing['title'] ?? '' ?>"
            />
          </div>

          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Job Description
            </label>

            <textarea
              name="description"
              rows="6"
              placeholder="Describe the responsibilities, role expectations, and work environment..."
              class="w-full px-5 py-3 rounded-xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-emerald-100 focus:border-emerald-500 outline-none transition"
            ><?= $listing['description'] ?? '' ?></textarea>
          </div>

          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Annual Salary
            </label>

            <input
              type="text"
              name="salary"
              placeholder="e.g. ₱40,000 - ₱60,000"
              class="w-full px-5 py-3 rounded-xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-emerald-100 focus:border-emerald-500 outline-none transition"
              value="<?= $listing['salary'] ?? '' ?>"
            />
          </div>

          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Tags
            </label>

            <input
              type="text"
              name="tags"
              placeholder="Remote, Full-Time, IT"
              class="w-full px-5 py-3 rounded-xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-emerald-100 focus:border-emerald-500 outline-none transition"
              value="<?= $listing['tags'] ?? '' ?>"
            />
          </div>

          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Requirements
            </label>

            <input
              type="text"
              name="requirements"
              placeholder="Bachelor's Degree, 2+ Years Experience..."
              class="w-full px-5 py-3 rounded-xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-emerald-100 focus:border-emerald-500 outline-none transition"
              value="<?= $listing['requirements'] ?? '' ?>"
            />
          </div>

          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Benefits
            </label>

            <input
              type="text"
              name="benefits"
              placeholder="Health Insurance, Bonuses, Flexible Schedule..."
              class="w-full px-5 py-3 rounded-xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-emerald-100 focus:border-emerald-500 outline-none transition"
              value="<?= $listing['benefits'] ?? '' ?>"
            />
          </div>
        </div>
      </div>

      <!-- Company Information -->
      <div class="mb-10">
        <div class="flex items-center gap-3 mb-6">
          <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21h18M5 21V7l8-4 8 4v14M9 9h.01M9 13h.01M9 17h.01M15 9h.01M15 13h.01M15 17h.01"/>
            </svg>
          </div>

          <div>
            <h2 class="text-2xl font-bold text-gray-800">
              Company & Location
            </h2>
            <p class="text-gray-500 text-sm">
              Provide company and contact details.
            </p>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Company Name
            </label>

            <input
              type="text"
              name="company"
              placeholder="Your company name"
              class="w-full px-5 py-3 rounded-xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition"
              value="<?= $listing['company'] ?? '' ?>"
            />
          </div>

          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Phone Number
            </label>

            <input
              type="text"
              name="phone"
              placeholder="+63 912 345 6789"
              class="w-full px-5 py-3 rounded-xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition"
              value="<?= $listing['phone'] ?? '' ?>"
            />
          </div>

          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Address
            </label>

            <input
              type="text"
              name="address"
              placeholder="Street address"
              class="w-full px-5 py-3 rounded-xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition"
              value="<?= $listing['address'] ?? '' ?>"
            />
          </div>

          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              City
            </label>

            <input
              type="text"
              name="city"
              placeholder="City"
              class="w-full px-5 py-3 rounded-xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition"
              value="<?= $listing['city'] ?? '' ?>"
            />
          </div>

          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              State / Province
            </label>

            <input
              type="text"
              name="state"
              placeholder="Province"
              class="w-full px-5 py-3 rounded-xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition"
              value="<?= $listing['state'] ?? '' ?>"
            />
          </div>

          <div class="md:col-span-2">
            <label class="block text-sm font-semibold text-gray-700 mb-2">
              Email Address
            </label>

            <input
              type="email"
              name="email"
              placeholder="applications@company.com"
              class="w-full px-5 py-3 rounded-xl border border-gray-300 bg-gray-50 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition"
              value="<?= $listing['email'] ?? '' ?>"
            />
          </div>
        </div>
      </div>

      <!-- Buttons -->
      <div class="flex flex-col md:flex-row gap-4 pt-4">

        <button
          class="flex-1 bg-gradient-to-r from-emerald-600 to-green-500 hover:from-emerald-700 hover:to-green-600 text-white font-semibold px-6 py-4 rounded-xl shadow-lg hover:shadow-xl transition duration-300"
        >
          Save Job Listing
        </button>

        <a
          href="/"
          class="flex-1 text-center bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold px-6 py-4 rounded-xl transition duration-300"
        >
          Cancel
        </a>

      </div>

    </form>
  </div>
</section>

<?= loadPartial('bottom-banner'); ?>