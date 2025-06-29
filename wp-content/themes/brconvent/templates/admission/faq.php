  <section class="py-16 sm:py-24 bg-background-gray" x-data="{ open: 1 }">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                     <h2 class="text-4xl sm:text-5xl font-extrabold text-primary-blue font-montserrat">Frequently Asked Questions</h2>
                </div>
                <div class="max-w-3xl mx-auto space-y-4">
                    <!-- FAQ Item 1 -->
                    <div>
                        <button @click="open = (open === 1 ? 0 : 1)" class="w-full text-left flex justify-between items-center p-4 bg-white rounded-lg text-dark-text font-semibold hover:bg-gray-50">
                            <span>What documents are required for admission?</span>
                            <svg class="w-5 h-5 transition-transform duration-300" :class="{'rotate-180': open === 1}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div x-show="open === 1" x-collapse class="p-4 bg-white border rounded-b-lg">
                            <p class="text-gray-600">You will need the student's birth certificate, previous year's report card (if applicable), transfer certificate, passport-sized photographs of the student and parents, and proof of residence.</p>
                        </div>
                    </div>
                    <!-- FAQ Item 2 -->
                    <div>
                        <button @click="open = (open === 2 ? 0 : 2)" class="w-full text-left flex justify-between items-center p-4 bg-white rounded-lg text-dark-text font-semibold hover:bg-gray-50">
                            <span>Is there an entrance test for all classes?</span>
                            <svg class="w-5 h-5 transition-transform duration-300" :class="{'rotate-180': open === 2}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div x-show="open === 2" x-collapse class="p-4 bg-white border rounded-b-lg">
                            <p class="text-gray-600">An entrance test is conducted for admissions to Grade I and above to assess the student's foundational knowledge. Admissions to pre-primary classes are based on interaction only.</p>
                        </div>
                    </div>
                    <!-- FAQ Item 3 -->
                    <div>
                        <button @click="open = (open === 3 ? 0 : 3)" class="w-full text-left flex justify-between items-center p-4 bg-white rounded-lg text-dark-text font-semibold hover:bg-gray-50">
                            <span>What are the school timings?</span>
                            <svg class="w-5 h-5 transition-transform duration-300" :class="{'rotate-180': open === 3}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div x-show="open === 3" x-collapse class="p-4 bg-white border rounded-b-lg">
                            <p class="text-gray-600">The school timings are from 8:00 AM to 2:00 PM, Monday to Friday. The school office is open from 9:00 AM to 4:00 PM on weekdays.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
