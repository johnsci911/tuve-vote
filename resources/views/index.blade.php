
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
</x-app-layout>
