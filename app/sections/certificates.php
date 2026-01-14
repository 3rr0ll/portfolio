<?php 
$certificates = require __DIR__ . '/../data/certificates.php'; 
?>

<section id="certificates" class="py-20 bg-white dark:bg-gray-900 transition-colors duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                Certificates & Achievements
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Professional certifications and achievements that showcase my expertise and continuous learning
            </p>
        </div>

        <div class="flex flex-col space-y-6 mt-4">
            <?php foreach ($certificates as $index => $certificate): ?>
                <div class="bg-gray-50 dark:bg-gray-800 rounded-lg shadow-md hover:shadow-xl transition-shadow overflow-hidden border border-gray-200 dark:border-gray-700">
                    <div class="p-6">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
                            <div class="flex-1">
                                <h3 class="text-2xl font-semibold text-gray-900 dark:text-white mb-2">
                                    <?= htmlspecialchars($certificate['title']) ?>
                                </h3>
                                <div class="flex flex-wrap gap-4 text-sm text-gray-600 dark:text-gray-400 mb-3">
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                        <?= htmlspecialchars($certificate['issuer']) ?>
                                    </span>
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <?= htmlspecialchars($certificate['date']) ?>
                                    </span>
                                    <?php if (!empty($certificate['credential_id'])): ?>
                                        <span class="flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                            </svg>
                                            ID: <?= htmlspecialchars($certificate['credential_id']) ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-700 dark:text-gray-400 leading-relaxed mb-4">
                            <?= htmlspecialchars($certificate['description']) ?>
                        </p>
                        <?php if (!empty($certificate['link'])): ?>
                            <a href="<?= htmlspecialchars($certificate['link']) ?>" 
                                target="_blank" 
                                rel="noopener noreferrer"
                                class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-medium transition-colors">
                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                                View Certificate
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

