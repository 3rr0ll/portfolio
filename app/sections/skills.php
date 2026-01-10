<?php 
$skills = require __DIR__ . '/../data/skills.php'; 
?>

<section id="skills" class="py-20 bg-white dark:bg-gray-900 transition-colors duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                Skills & Technologies
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Technologies and tools I work with to bring ideas to life
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($skills as $category => $items): ?>
                <div class="bg-gray-50 dark:bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow border border-gray-200 dark:border-gray-700">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4 pb-2 border-b border-gray-300 dark:border-gray-600">
                        <?= htmlspecialchars($category) ?>
                    </h3>
                    <ul class="space-y-2">
                        <?php foreach ($items as $skill): ?>
                            <li class="flex items-center text-gray-700 dark:text-gray-300">
                                <svg class="w-5 h-5 mr-2 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <?= htmlspecialchars($skill) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
