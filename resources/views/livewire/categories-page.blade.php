<div class="w-full bg-gradient-to-r from-orange-200 to-red-200 py-10 px-4 sm:px-6 lg:px-8">
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 sm:gap-6">

            @foreach ($categories as $category)
                <a class="group flex items-center bg-white border shadow-sm rounded-xl hover:shadow-md transition
                dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1
                dark:focus:ring-gray-600"
                    href="#" wire:key="{{ $category->id }}">
                    <div class="p-4 md:p-5 flex flex-1 items-center">
                        <img class="h-[5rem] w-[5rem] rounded-full" src="{{ url('storage', $category->image) }}"
                            alt="{{ $category->name }}">
                        <div class="ms-3">
                            <h3
                                class="group-hover:text-blue-600 text-2xl font-semibold text-gray-800
                            dark:group-hover:text-gray-400 dark:text-gray-200">
                                {{ $category->name }}
                            </h3>
                        </div>
                    </div>
                    <div class="p-4">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 group-hover:text-blue-600
                        dark:group-hover:text-gray-400 dark:text-gray-200"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </div>
                </a>
            @endforeach



        </div>
    </div>
</div>
