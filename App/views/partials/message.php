<?php

use Framework\Session;
?>

<!-- Success Message -->
<?php $successMessage = Session::getFlashMessage('success_message'); ?>

<?php if($successMessage !== null): ?>

<div class="mb-6">

    <div class="flex items-start gap-4 bg-emerald-50 border border-emerald-200 text-emerald-700 px-5 py-4 rounded-2xl shadow-sm">

        <!-- Icon -->
        <div class="flex-shrink-0 w-11 h-11 rounded-xl bg-emerald-100 flex items-center justify-center">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>

        </div>

        <!-- Content -->
        <div>

            <h3 class="font-bold text-emerald-800 mb-1">
                Success
            </h3>

            <p class="text-sm leading-relaxed">
                <?= $successMessage ?>
            </p>

        </div>

    </div>

</div>

<?php endif; ?>


<!-- Error Message -->
<?php $errorMessage = Session::getFlashMessage('error_message'); ?>

<?php if($errorMessage !== null): ?>

<div class="mb-6">

    <div class="flex items-start gap-4 bg-red-50 border border-red-200 text-red-700 px-5 py-4 rounded-2xl shadow-sm">

        <!-- Icon -->
        <div class="flex-shrink-0 w-11 h-11 rounded-xl bg-red-100 flex items-center justify-center">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M5.07 19h13.86c1.54 0 2.5-1.67 1.73-3L13.73 4c-.77-1.33-2.69-1.33-3.46 0L3.34 16c-.77 1.33.19 3 1.73 3z"/>
            </svg>

        </div>

        <!-- Content -->
        <div>

            <h3 class="font-bold text-red-800 mb-1">
                Error
            </h3>

            <p class="text-sm leading-relaxed">
                <?= $errorMessage ?>
            </p>

        </div>

    </div>

</div>

<?php endif; ?>