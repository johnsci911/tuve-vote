<div>
    <nav class="hidden md:flex items-center justify-between text-gray-400 text-xs">
        <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
			<li><a wire:click.prevent="setStatus('All')" href="" class="transition duration-150 ease-in border-b-4 pb-3 @if($status == 'All') border-blue text-gray-900 @else hover:border-blue text-gray-400 @endif">All Ideas (87)</a></li>
            <li><a wire:click.prevent="setStatus('Considering')" href="" class="transition duration-150 ease-in border-b-4 pb-3 @if($status == 'Considering') border-blue text-gray-900 @else hover:border-blue text-gray-400 @endif">Considering (6)</a></li>
            <li><a wire:click.prevent="setStatus('In Progress')" href="" class="transition duration-150 ease-in border-b-4 pb-3 @if($status == 'In Progress') border-blue text-gray-900 @else hover:border-blue text-gray-400 @endif">In Progress (1)</a></li>
        </ul>
        <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
            <li><a wire:click.prevent="setStatus('Implemented')" href="" class="transition duration-150 ease-in border-b-4 pb-3 @if($status == 'Implemented') border-blue text-gray-900 @else hover:border-blue text-gray-400 @endif">Implementation(10)</a></li>
            <li><a wire:click.prevent="setStatus('Closed')" href="" class="transition duration-150 ease-in border-b-4 pb-3 @if($status == 'Closed') border-blue text-gray-900 @else hover:border-blue text-gray-400 @endif">Closed (55)</a></li>
        </ul>
    </nav>
</div>
