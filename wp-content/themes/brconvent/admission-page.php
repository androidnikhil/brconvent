<?php
/**
 *  Template Name: Admission Page
 **/
get_header();
?>
    <main role="main" id="mainContent">
        <?php get_template_part('templates/admission/header'); ?>
        <?php get_template_part('templates/admission/process'); ?>
        <?php get_template_part('templates/admission/eligibility'); ?>
         <section class="py-16 sm:py-24 bg-white">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-primary-blue font-montserrat">Admission Inquiry</h2>
                    <p class="mt-4 max-w-3xl mx-auto text-lg text-gray-600">Have questions? Fill out the form below, and our admissions team will get in touch with you shortly.</p>
                </div>
                <div class="mt-12 max-w-3xl mx-auto">
                    <div class="bg-background-gray p-8 rounded-lg shadow-lg">
                        <form action="#" method="POST" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="parent-name" class="block text-sm font-medium text-dark-text">Parent's Name</label>
                                    <input type="text" name="parent-name" id="parent-name" class="mt-1 block w-full shadow-sm py-2 px-3 border border-gray-300 rounded-md focus:ring-primary-blue focus:border-primary-blue">
                                </div>
                                <div>
                                    <label for="student-name" class="block text-sm font-medium text-dark-text">Student's Name</label>
                                    <input type="text" name="student-name" id="student-name" class="mt-1 block w-full shadow-sm py-2 px-3 border border-gray-300 rounded-md focus:ring-primary-blue focus:border-primary-blue">
                                </div>
                            </div>
                             <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="email-inquiry" class="block text-sm font-medium text-dark-text">Email Address</label>
                                    <input type="email" name="email-inquiry" id="email-inquiry" class="mt-1 block w-full shadow-sm py-2 px-3 border border-gray-300 rounded-md focus:ring-primary-blue focus:border-primary-blue">
                                </div>
                                <div>
                                    <label for="phone-inquiry" class="block text-sm font-medium text-dark-text">Phone Number</label>
                                    <input type="text" name="phone-inquiry" id="phone-inquiry" class="mt-1 block w-full shadow-sm py-2 px-3 border border-gray-300 rounded-md focus:ring-primary-blue focus:border-primary-blue">
                                </div>
                            </div>
                            <div>
                                <label for="class-seeking" class="block text-sm font-medium text-dark-text">Class Seeking Admission For</label>
                                <select id="class-seeking" name="class-seeking" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary-blue focus:border-primary-blue">
                                    <option>Nursery</option>
                                    <option>LKG</option>
                                    <option>UKG</option>
                                    <option>Grade I</option>
                                    <option>Grade II</option>
                                    <option>Grade III</option>
                                    <option>Grade IV</option>
                                    <option>Grade V</option>
                                    <option>Grade VI</option>
                                    <option>Grade VII</option>
                                    <option>Grade VIII</option>
                                    <option>Grade IX</option>
                                    <option>Grade X</option>
                                    <option>Grade XI</option>
                                    <option>Grade XII</option>
                                </select>
                            </div>
                            <div>
                                <label for="message-inquiry" class="block text-sm font-medium text-dark-text">Your Message</label>
                                <textarea id="message-inquiry" name="message-inquiry" rows="4" class="mt-1 block w-full shadow-sm py-2 px-3 border border-gray-300 rounded-md focus:ring-primary-blue focus:border-primary-blue"></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="inline-flex justify-center py-3 px-8 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-primary-blue hover:bg-opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-blue transition-colors">
                                    Submit Inquiry
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php get_template_part('templates/admission/faq'); ?>
</main>
<?php get_footer(); ?>