<div
	x-data
	@click="
		const clicked = $event.target
		const target = clicked.tagName.toLowerCase()

		const ignores = ['button', 'svg', 'path', 'a']

		if (! ignores.includes(target)) {
			clicked.closest('.idea-container').querySelector('.idea-link').click()
		}
	"
	class="idea-container hover:shadow-card cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex"
>
	<div class="hidden md:block border-r border-gray-100 px-5 py-8">
		<div class="text-center">
			<div class="font-semibold text-2xl">{{ $votesCount }}</div>
			<div class="text-gray-500">Votes</div>
		</div>
		<div class="mt-8">
			<button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in font-bold text-xxs uppercase rounded-xl px-4 py-3">Vote</button>
		</div>
	</div>
	<div class="flex flex-col md:flex-row px-2 py-6 flex-1">
		<div class="flex-none mx-2 md:mx-0 md:mx-0"> 
			<a href="#">
				<img src="{{ $idea->user->getAvatar() }}" href="#" alt="avatar" class="w-14 h-14 rounded-xl"></img>
			</a>
		</div>
		<div class="w-full mx-2 md:mx-4">
			<h4 class="text-xl font-semibold mt-2 md:mt-0">
				<a href="{{ route('idea.show', $idea) }}" class="idea-link hover:underline">{{ $idea->title }}</a>
			</h4>
			<div class="text-gray-600 mt-3 line-clamp-3">       
				{{ $idea->description }}
			</div>

			<div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
				<div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
					<div>{{ $idea->created_at->diffForHumans() }}</div>
					<div>&bull;</div>
					<div>{{ $idea->category->name }}</div>
					<div>&bull;</div>
					<div class="text-gray-900">3 Comments</div>
				</div>
				<div
					x-data="{ isOpen: false }"
					class="flex items-center space-x-2 mt-4 md:mt-0"
				>
					<div class="{{ $idea->status->classes }} text-xxs font-bold uppercase leading-none rounded-xl full text-center w-28 h-7 py-2 px-4">{{ $idea->status->name }}</div>
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
						<div class="text-sm font-bold leading-none">{{ $votesCount }}</div>
						<div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
					</div>
					<button class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in hover:border-gray-400 px-4 py-3 -mx-5">
						Voted
					</button>
				</div>
			</div>
		</div>
	</div>
</div> <!-- end idea container -->
