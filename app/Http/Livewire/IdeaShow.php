<?php

namespace App\Http\Livewire;

use App\Exceptions\VoteNotFoundException;
use App\Models\Idea;
use Livewire\Component;
use Seld\JsonLint\DuplicateKeyException;

class IdeaShow extends Component
{
	public $idea;
	public $votesCount;
	public $hasVoted;

	public function mount(Idea $idea, $votesCount)
	{
		$this->idea = $idea;
		$this->votesCount = $votesCount;
		$this->hasVoted = $idea->isVotedByUser(auth()->user());
	}

	public function vote()
	{
		if (! auth()->check()) {
			return redirect(route('login'));
		}

		if ($this->hasVoted) {
			try {
				$this->idea->removeVote(auth()->user());
			} catch (VoteNotFoundException $e) {
				// Do nothing
			}
			$this->votesCount--;
			$this->hasVoted = false;
		} else {	
			try {
				$this->idea->vote(auth()->user());
			} catch (DuplicateKeyException $e) {
				// Do nothing
			}
			$this->votesCount++;
			$this->hasVoted = true;
		}
	}

    public function render()
	{
        return view('livewire.idea-show');
    }
}
