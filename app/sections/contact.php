<section id="contact" class="py-20 bg-gray-50 dark:bg-gray-800 transition-colors duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    Get In Touch
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    Have a project in mind or want to collaborate? Feel free to reach out.
                </p>
            </div>

            <div x-data="contactForm()" class="bg-white dark:bg-gray-900 rounded-lg shadow-lg p-8 border border-gray-200 dark:border-gray-700">
                <form @submit.prevent="submitForm" class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Name
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            x-model="form.name"
                            required
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-white transition-colors"
                            placeholder="Your Name">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Email
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            x-model="form.email"
                            required
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-white transition-colors"
                            placeholder="your.email@example.com">
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Subject
                        </label>
                        <input 
                            type="text" 
                            id="subject" 
                            name="subject" 
                            x-model="form.subject"
                            required
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-white transition-colors"
                            placeholder="Project Inquiry">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Message
                        </label>
                        <textarea 
                            id="message" 
                            name="message" 
                            x-model="form.message"
                            rows="6"
                            required
                            class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-white transition-colors resize-none"
                            placeholder="Tell me about your project..."></textarea>
                    </div>

                    <button 
                        type="submit"
                        :disabled="submitting"
                        class="w-full px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 disabled:bg-blue-400 disabled:cursor-not-allowed transition-colors font-medium shadow-md hover:shadow-lg">
                        <span x-show="!submitting">Send Message</span>
                        <span x-show="submitting">Sending...</span>
                    </button>

                    <div x-show="message" 
                         x-text="message"
                         :class="messageType === 'success' ? 'text-green-600 dark:text-green-400' : 'text-red-600 dark:text-red-400'"
                         class="text-center text-sm font-medium"></div>
                </form>
            </div>

            <div class="mt-8 text-center">
                <p class="text-gray-600 dark:text-gray-400 mb-4">Or reach out directly:</p>
                <div class="flex justify-center space-x-6">
                    <a href="mailto:lorem.ipsum@example.com" 
                       class="text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 transition-colors font-medium">
                        lorem.ipsum@example.com
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function contactForm() {
            return {
                form: {
                    name: '',
                    email: '',
                    subject: '',
                    message: ''
                },
                submitting: false,
                message: '',
                messageType: '',

                submitForm() {
                    this.submitting = true;
                    this.message = '';
                    
                    // Simulate form submission
                    setTimeout(() => {
                        this.submitting = false;
                        this.message = 'Thank you for your message! I will get back to you soon.';
                        this.messageType = 'success';
                        
                        // Reset form
                        this.form = {
                            name: '',
                            email: '',
                            subject: '',
                            message: ''
                        };
                        
                        // Clear message after 5 seconds
                        setTimeout(() => {
                            this.message = '';
                        }, 5000);
                    }, 1000);
                }
            }
        }
    </script>
</section>

