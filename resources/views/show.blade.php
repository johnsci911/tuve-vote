<x-app-layout>
	<div>
		<a class="flex items-center font-semibold hover:underline" href="/">
			<svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
			</svg>
			<span class="ml-2">All ideas</span>
		</a>
	</div>
	<div class="mt-4 idea-container bg-white rounded-xl flex">
		<div class="flex py-6 flex-1 px-4">
			<div class="flex-none">	
				<a href="#">
					<img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" href="#" alt="avatar" class="w-14 h-14 rounded-xl"></img>
				</a>
			</div>
			<div class="w-full mx-4">
				<h4 class="text-xl font-semibold">
					<a href="#" class="hover:underline">Random title can go here</a>
				</h4>
				<div class="text-gray-600 mt-3 line-clamp-3">		
                	Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, qui
				</div>

				<div class="flex items-center justify-between mt-6">
					<div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
						<div class="font-bold text-gray-900">John Doe</div>
						<div>&bull;</div>
						<div>10 hours ago</div>
						<div>&bull;</div>
						<div>Category</div>
						<div>&bull;</div>
						<div class="text-gray-900">3 Comments</div>
					</div>
					<div class="flex items-center space-x-2">
						<div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-xl full text-center w-28 h-7 py-2 px-4">Open</div>
						<button class="relative border bg-gray-100 rounded-full hover:bg-gray-200 transition duration-150 h-7 ease-in py-2 px-4">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
								<path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
							</svg>
							<ul class="hidden absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8">
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

	<div class="buttons-container flex items-center justify-between mt-6">	
		<div class="flex items-center space-x-4 ml-6">		
			<button type="button" class="flex items-center w-32 justify-center h-11 text-sm bg-blue font-semibold rounded-xl border border-gray-200 hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 text-white">
				<span class="ml-1">Reply</span>
			</button>
			<button type="button" class="flex w-36 items-center justify-center h-11 text-sm bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
				<span>Set Status</span>
				<svg class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
				</svg>
			</button>
		</div>
		<div class="flex items-center space-x-3">
			<div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
				<div class="text-xl leading-snug">12</div>
				<div class="text-gray-400 text-xs leading-none">Votes</div>
			</div>
			<button type="button" class="uppercase w-32 h-11 text-sm bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
				<span>Vote</span>
			</button>
		</div>
	</div> <!-- end buttons-container -->
	<div class="comments-container relative space-y-6 ml-22 my-8 mt-1 pt-4">
		<div class="mt-4 comment-container relative bg-white rounded-xl flex">
			<div class="flex py-6 flex-1 px-4">
				<div class="flex-none">	
					<a href="#">
						<img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" href="#" alt="avatar" class="w-14 h-14 rounded-xl"></img>
					</a>
				</div>
				<div class="w-full mx-4">
					<!-- <h4 class="text-xl font-semibold">
						<a href="#" class="hover:underline">Random title can go here</a>
					</h4> -->
					<div class="text-gray-600 mt-3">		
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, qui
					</div>

					<div class="flex items-center justify-between mt-6">
						<div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
							<div class="font-bold text-gray-900">John Doe</div>
							<div>&bull;</div>
							<div>10 hours ago</div>
						</div>
						<div class="flex items-center space-x-2">
							<button class="relative border bg-gray-100 rounded-full hover:bg-gray-200 transition duration-150 h-7 ease-in py-2 px-4">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
									<path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
								</svg>
								<ul class="hidden absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8">
									<li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
									<li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Delete post</a></li>
								</ul>
							</button>
							<bg-gray-200 class="rounded-full h-7"></bg-gray-200>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end comment-container-->
		<div class="is-admin mt-4 comment-container relative bg-white rounded-xl flex">
			<div class="flex py-6 flex-1 px-4">
				<div class="flex-none">	
					<a href="#">
						<img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" href="#" alt="avatar" class="w-14 h-14 rounded-xl"></img>
					</a>
					<div class="text-center uppercase text-blue text-xxs font-bold mt-1">Admin</div>
				</div>
				<div class="w-full mx-4">
					<h4 class="text-xl font-semibold">
						<a href="#" class="hover:underline">Status changed to "Consideration"</a>
					</h4>
					<div class="text-gray-600 mt-3">		
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, qui
					</div>

					<div class="flex items-center justify-between mt-6">
						<div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
							<div class="font-bold text-blue">Micheal</div>
							<div>&bull;</div>
							<div>10 hours ago</div>
						</div>
						<div class="flex items-center space-x-2">
							<button class="relative border bg-gray-100 rounded-full hover:bg-gray-200 transition duration-150 h-7 ease-in py-2 px-4">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
									<path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
								</svg>
								<ul class="hidden absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8">
									<li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
									<li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Delete post</a></li>
								</ul>
							</button>
							<bg-gray-200 class="rounded-full h-7"></bg-gray-200>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end comment-container-->
		<div class="mt-4 comment-container relative bg-white rounded-xl flex">
			<div class="flex py-6 flex-1 px-4">
				<div class="flex-none">	
					<a href="#">
						<img src="https://source.unsplash.com/200x200/?face&crop=face&v=5" href="#" alt="avatar" class="w-14 h-14 rounded-xl"></img>
					</a>
				</div>
				<div class="w-full mx-4">
					<!-- <h4 class="text-xl font-semibold">
						<a href="#" class="hover:underline">Random title can go here</a>
					</h4> -->
					<div class="text-gray-600 mt-3">		
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, qui
					</div>

					<div class="flex items-center justify-between mt-6">
						<div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
							<div class="font-bold text-gray-900">John Doe</div>
							<div>&bull;</div>
							<div>10 hours ago</div>
						</div>
						<div class="flex items-center space-x-2">
							<button class="relative border bg-gray-100 rounded-full hover:bg-gray-200 transition duration-150 h-7 ease-in py-2 px-4">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
									<path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
								</svg>
								<ul class="hidden absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8">
									<li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Mark as spam</a></li>
									<li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in block">Delete post</a></li>
								</ul>
							</button>
							<bg-gray-200 class="rounded-full h-7"></bg-gray-200>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- end comment-container-->
	</div> <!-- end comments-container -->
</x-app-layout>
