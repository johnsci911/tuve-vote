<x-app-layout>
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3">
            <select id="category" name="category" class="w-full rounded-xl px-4 py-2 border-none" name="">
                <option value="category One">Category One</option>
                <option value="category Two">Category Two</option>
                <option value="category Three">Category Three</option>
                <option value="category Four">Category Four</option>
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select id="other_filters" name="Other Filters" class="w-full rounded-xl px-4 py-2 border-none" name="">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>
        <div class="w-full md:w-2/3 relative">
            <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none placeholder-gray-900">
            <div class="absolute top-0 flex items-center h-full ml-2">  
                <svg class="w-4 text-gray-700" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div> <!-- end filters -->
    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container hover:shadow-card cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
            <div class="hidden md:block border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row px-2 py-6 flex-1">
                <div class="flex-none mx-2 md:mx-0 md:mx-0"> 
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" href="#" alt="avatar" class="w-14 h-14 rounded-xl"></img>
                    </a>
                </div>
                <div class="w-full mx-2 md:mx-4">
                    <h4 class="text-xl font-semibold mt-2 md:mt-0">
                        <a href="#" class="hover:underline">Random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">       
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center space-x-2 mt-4 md:mt-0"
                        >
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-xl full text-center w-28 h-7 py-2 px-4">Open</div>
                            <button 
                                @click="isOpen = !isOpen"
                                class="relative border bg-gray-100 rounded-full hover:bg-gray-200 transition duration-150 h-7 ease-in py-2 px-4"
                                >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                                <ul 
                                    x-cloak
                                    x-show.transition.origin.top.left.500ms="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8 top-8 md:top-6 right-0 md:left-0"
                                    >
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Delete post</a></li>
                                </ul>
                            </button>
                        </div>
						<div class="flex items-center mt-4 md:hidden md:mt-8">
							<div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
								<div class="text-sm font-bold leading-none">12</div>
								<div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
							</div>
							<button class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in hover:border-gray-400 px-4 py-3 -mx-5">
								Voted
							</button>
						</div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea container-->

        <div class="idea-container hover:shadow-card cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
            <div class="hidden md:block border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-blue">42</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-blue border border-blue-200 hover:bg-blue-hover text-white transition duration-150 ease-in font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row px-2 py-6 flex-1">
                <div class="flex-none mx-4 md:mx-0"> 
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" href="#" alt="avatar" class="w-14 h-14 rounded-xl"></img>
                    </a>
                </div>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold mt-2 md:mt-0">
                        <a href="#" class="hover:underline">Random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">       
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, qui
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center space-x-2 mt-4 md:mt-0"
                        >
                            <div class="bg-yellow text-xxs font-bold uppercase leading-none rounded-xl full text-center w-28 h-7 py-2 px-4">In Progress</div>
                            <button 
                                @click="isOpen = !isOpen"
                                class="relative border bg-gray-100 rounded-full hover:bg-gray-200 transition duration-150 h-7 ease-in py-2 px-4"
                                >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                                <ul 
                                    x-cloak
                                    x-show.transition.origin.top.left.500ms="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8 top-8 md:top-6 right-0 md:left-0"
                                    >
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Delete post</a></li>
                                </ul>
                            </button>
                        </div>
						<div class="flex items-center mt-4 md:hidden md:mt-8">
							<div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
								<div class="text-sm font-bold leading-none">12</div>
								<div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
							</div>
							<button class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in hover:border-gray-400 px-4 py-3 -mx-5">
								Voted
							</button>
						</div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea container-->

        <div class="idea-container hover:shadow-card cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
            <div class="hidden md:block border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row px-2 py-6 flex-1">
                <div class="flex-none mx-4 md:mx-0"> 
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" href="#" alt="avatar" class="w-14 h-14 rounded-xl"></img>
                    </a>
                </div>
                <div class="mx-4"> 
                    <h4 class="text-xl font-semibold mt-2 md:mt-0">

                        <a href="#" class="hover:underline">Random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">       
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, qui
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center space-x-2 mt-4 md:mt-0"
                        >
                            <div class="bg-red text-white text-xxs font-bold uppercase leading-none rounded-xl full text-center w-28 h-7 py-2 px-4">Closed</div>
                            <button 
                                @click="isOpen = !isOpen"
                                class="relative border bg-gray-100 rounded-full hover:bg-gray-200 transition duration-150 h-7 ease-in py-2 px-4"
                                >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                                <ul 
                                    x-cloak
                                    x-show.transition.origin.top.left.500ms="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8 top-8 md:top-6 right-0 md:left-0"
                                    >
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Delete post</a></li>
                                </ul>
                            </button>
                        </div>
						<div class="flex items-center mt-4 md:hidden md:mt-8">
							<div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
								<div class="text-sm font-bold leading-none">12</div>
								<div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
							</div>
							<button class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in hover:border-gray-400 px-4 py-3 -mx-5">
								Voted
							</button>
						</div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea container-->

        <div class="idea-container hover:shadow-card cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
            <div class="hidden md:block border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row px-2 py-6 flex-1">
                <div class="flex-none mx-4 md:mx-0"> 
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" href="#" alt="avatar" class="w-14 h-14 rounded-xl"></img>
                    </a>
                </div>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold mt-2 md:mt-0">

                        <a href="#" class="hover:underline">Random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">       
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, qui
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center space-x-2 mt-4 md:mt-0"
                        >
                            <div class="bg-green text-white text-xxs font-bold uppercase leading-none rounded-xl full text-center w-28 h-7 py-2 px-4">Implemented</div>
                            <button 
                                @click="isOpen = !isOpen"
                                class="relative border bg-gray-100 rounded-full hover:bg-gray-200 transition duration-150 h-7 ease-in py-2 px-4"
                                >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                                <ul 
                                    x-cloak
                                    x-show.transition.origin.top.left.500ms="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8 top-8 md:top-6 right-0 md:left-0"
                                    >
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Delete post</a></li>
                                </ul>
                            </button>
                        </div>
						<div class="flex items-center mt-4 md:hidden md:mt-8">
							<div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
								<div class="text-sm font-bold leading-none">12</div>
								<div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
							</div>
							<button class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in hover:border-gray-400 px-4 py-3 -mx-5">
								Voted
							</button>
						</div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea container-->

        <div class="idea-container hover:shadow-card cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
            <div class="hidden md:block border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>
                <div class="mt-8">
                    <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row px-2 py-6 flex-1">
                <div class="flex-none mx-4 md:mx-0"> 
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" href="#" alt="avatar" class="w-14 h-14 rounded-xl"></img>
                    </a>
                </div>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold mt-2 md:mt-0">
                        <a href="#" class="hover:underline">Random title can go here</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">       
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, qui
                    </div>

                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div
                            x-data="{ isOpen: false }"
                            class="flex items-center space-x-2 mt-4 md:mt-0"
                        >
                            <div class="bg-purple text-white text-xxs font-bold uppercase leading-none rounded-xl full text-center w-28 h-7 py-2 px-4">Considering</div>
                            <button 
                                @click="isOpen = !isOpen"
                                class="relative border bg-gray-100 rounded-full hover:bg-gray-200 transition duration-150 h-7 ease-in py-2 px-4"
                                >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                                <ul 
                                    x-cloak
                                    x-show.transition.origin.top.left.500ms="isOpen"
                                    @click.away="isOpen = false"
                                    @keydown.escape.window="isOpen = false"
                                    class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8 top-8 md:top-6 right-0 md:left-0"
                                    >
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Delete post</a></li>
                                </ul>
                            </button>
                        </div>
						<div class="flex items-center mt-4 md:hidden md:mt-8">
							<div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
								<div class="text-sm font-bold leading-none">12</div>
								<div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
							</div>
							<button class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in hover:border-gray-400 px-4 py-3 -mx-5">
								Voted
							</button>
						</div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea container-->
    </div>
</x-app-layout>
