<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-1/3 px-4 mb-8 lg:mb-0">
                <h2 class="text-2xl font-bold text-[#111C4E] leading-tight">
                    FREQUENTLY<br>
                    ASKED<br>
                    QUESTIONS (FAQs)
                </h2>
            </div>
            <div class="w-full lg:w-2/3 px-4">
                <div class="space-y-4">
                    <?php
                    $faqs = [
                        "WHY SECURE PERMITS?",
                        "WHY SECURE PERMITS?",
                        "WHY SECURE PERMITS?",
                        "WHY SECURE PERMITS?"
                    ];
                    foreach ($faqs as $index => $question) :
                    ?>
                        <div x-data="{ open: false }" class="border-b border-gray-200">
                            <button 
                                @click="open = !open" 
                                class="flex justify-between items-center w-full py-4 px-6 text-left bg-yellow-400 hover:bg-yellow-300 focus:outline-none"
                            >
                                <span class="font-semibold text-[#111C4E]"><?= $question ?></span>
                                <svg class="w-5 h-5 text-[#111C4E]" :class="{'transform rotate-180': open}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-95" class="p-6 bg-white">
                                <p class="text-gray-700">Answer goes here</p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
