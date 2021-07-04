
<x-app-layout>
	<div class="filters flex space-x-6">
		<div class="w-1/3">
			<select id="category" name="category" class="w-full rounded-xl px-4 py-2 border-none" name="">
				<option value="category One">Category One</option>
				<option value="category Two">Category Two</option>
				<option value="category Three">Category Three</option>
				<option value="category Four">Category Four</option>
			</select>
		</div>
		<div class="w-1/3">
			<select id="other_filters" name="Other Filters" class="w-full rounded-xl px-4 py-2 border-none" name="">
				<option value="Filter One">Filter One</option>
				<option value="Filter Two">Filter Two</option>
				<option value="Filter Three">Filter Three</option>
				<option value="Filter Four">Filter Four</option>
			</select>
		</div>
		<div class="w-2/3 relative">
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
			<div class="border-r border-gray-100 px-5 py-8">
				<div class="text-center">
					<div class="font-semibold text-2xl">12</div>
					<div class="text-gray-500">Votes</div>
				</div>
				<div class="mt-8">
					<button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
				</div>
			</div>
			<div class="flex px-2 py-6">
				<a href="#" class="flex-none">
					<img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" href="#" alt="avatar" class="w-14 h-14 rounded-xl"></img>
				</a>
				<div class="mx-4">
					<h4 class="text-xl font-semibold">
						<a href="#" class="hover:underline">Random title can go here</a>
					</h4>
					<div class="text-gray-600 mt-3 line-clamp-3">		
                		Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, qui
					</div>

					<div class="flex items-center justify-between mt-6">
						<div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
							<div>10 hours ago</div>
							<div>&bull;</div>
							<div>Category</div>
							<div>&bull;</div>
							<div class="text-gray-900">3 Comments</div>
						</div>
						<div class="flex items-center space-x-2">
							<div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-xl full text-center w-28 h-7 py-2 px-4">Open</div>
							<button class="relative bg-gray-100 rounded-full hover:bg-gray-200 transition duration-150 h-7 ease-in py-2 px-4">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
									<path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
								</svg>
								<ul class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8">
									<li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
									<li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Delete post</a></li>
								</ul>
							</button>
							<bg-gray-200 class="rounded-full h-7"></bg-gray-200>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end idea container-->

		<div class="idea-container hover:shadow-card cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
			<div class="border-r border-gray-100 px-5 py-8">
				<div class="text-center">
					<div class="font-semibold text-2xl text-blue">42</div>
					<div class="text-gray-500">Votes</div>
				</div>
				<div class="mt-8">
					<button class="w-20 bg-blue border border-blue-200 hover:border-blue-hover transition duration-150 ease-in font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
				</div>
			</div>
			<div class="flex px-2 py-6">
				<a href="#" class="flex-none">
					<img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" href="#" alt="avatar" class="w-14 h-14 rounded-xl"></img>
				</a>
				<div class="mx-4">
					<h4 class="text-xl font-semibold">
						<a href="#" class="hover:underline">Random title can go here</a>
					</h4>
					<div class="text-gray-600 mt-3 line-clamp-3">		
                		Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, qui
					</div>

					<div class="flex items-center justify-between mt-6">
						<div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
							<div>10 hours ago</div>
							<div>&bull;</div>
							<div>Category</div>
							<div>&bull;</div>
							<div class="text-gray-900">3 Comments</div>
						</div>
						<div class="flex items-center space-x-2">
							<div class="bg-yellow text-xxs text-white rounded-xl font-bold uppercase leading-none rounded full text-center w-28 h-7 py-2 px-4">In progress</div>
							<button class="relative bg-gray-100 rounded-full hover:bg-gray-200 transition duration-150 h-7 ease-in py-2 px-4">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
									<path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
								</svg>
							</button>
							<bg-gray-200 class="rounded-full h-7"></bg-gray-200>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end idea container-->

		<div class="idea-container hover:shadow-card cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
			<div class="border-r border-gray-100 px-5 py-8">
				<div class="text-center">
					<div class="font-semibold text-2xl">12</div>
					<div class="text-gray-500">Votes</div>
				</div>
				<div class="mt-8">
					<button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
				</div>
			</div>
			<div class="flex px-2 py-6">
				<a href="#" class="flex-none">
					<img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" href="#" alt="avatar" class="w-14 h-14 rounded-xl"></img>
				</a>
				<div class="mx-4">
					<h4 class="text-xl font-semibold">
						<a href="#" class="hover:underline">Random title can go here</a>
					</h4>
					<div class="text-gray-600 mt-3 line-clamp-3">		
                		Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, qui
					</div>

					<div class="flex items-center justify-between mt-6">
						<div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
							<div>10 hours ago</div>
							<div>&bull;</div>
							<div>Category</div>
							<div>&bull;</div>
							<div class="text-gray-900">3 Comments</div>
						</div>
						<div class="flex items-center space-x-2">
							<div class="bg-red text-white text-xxs font-bold uppercase leading-none rounded-xl full text-center w-28 h-7 py-2 px-4">Closed</div>
							<button class="relative bg-gray-100 rounded-full hover:bg-gray-200 transition duration-150 h-7 ease-in py-2 px-4">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
									<path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
								</svg>
							</button>
							<bg-gray-200 class="rounded-full h-7"></bg-gray-200>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end idea container-->

		<div class="idea-container hover:shadow-card cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
			<div class="border-r border-gray-100 px-5 py-8">
				<div class="text-center">
					<div class="font-semibold text-2xl">12</div>
					<div class="text-gray-500">Votes</div>
				</div>
				<div class="mt-8">
					<button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
				</div>
			</div>
			<div class="flex px-2 py-6">
				<a href="#" class="flex-none">
					<img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" href="#" alt="avatar" class="w-14 h-14 rounded-xl"></img>
				</a>
				<div class="mx-4">
					<h4 class="text-xl font-semibold">
						<a href="#" class="hover:underline">Random title can go here</a>
					</h4>
					<div class="text-gray-600 mt-3 line-clamp-3">		
                		Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, qui
					</div>

					<div class="flex items-center justify-between mt-6">
						<div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
							<div>10 hours ago</div>
							<div>&bull;</div>
							<div>Category</div>
							<div>&bull;</div>
							<div class="text-gray-900">3 Comments</div>
						</div>
						<div class="flex items-center space-x-2">
							<div class="bg-green text-white text-white text-xxs font-bold uppercase leading-none rounded-xl full text-center w-28 h-7 py-2 px-4">Implemented</div>
							<button class="relative bg-gray-100 rounded-full hover:bg-gray-200 transition duration-150 h-7 ease-in py-2 px-4">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
									<path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
								</svg>
							</button>
							<bg-gray-200 class="rounded-full h-7"></bg-gray-200>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end idea container-->

		<div class="idea-container hover:shadow-card cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
			<div class="border-r border-gray-100 px-5 py-8">
				<div class="text-center">
					<div class="font-semibold text-2xl">12</div>
					<div class="text-gray-500">Votes</div>
				</div>
				<div class="mt-8">
					<button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
				</div>
			</div>
			<div class="flex px-2 py-6">
				<a href="#" class="flex-none">
					<img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" href="#" alt="avatar" class="w-14 h-14 rounded-xl"></img>
				</a>
				<div class="mx-4">
					<h4 class="text-xl font-semibold">
						<a href="#" class="hover:underline">Random title can go here</a>
					</h4>
					<div class="text-gray-600 mt-3 line-clamp-3">		
                		Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, qui
					</div>

					<div class="flex items-center justify-between mt-6">
						<div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
							<div>10 hours ago</div>
							<div>&bull;</div>
							<div>Category</div>
							<div>&bull;</div>
							<div class="text-gray-900">3 Comments</div>
						</div>
						<div class="flex items-center space-x-2">
							<div class="bg-purple text-white text-white text-xxs font-bold uppercase leading-none rounded-xl full text-center w-28 h-7 py-2 px-4">Considering</div>
							<button class="relative bg-gray-100 rounded-full hover:bg-gray-200 transition duration-150 h-7 ease-in py-2 px-4">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
									<path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
								</svg>
							</button>
							<bg-gray-200 class="rounded-full h-7"></bg-gray-200>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end idea container-->
	</div>
</x-app-layout>
