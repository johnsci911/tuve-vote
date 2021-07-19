<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
	use RefreshDatabase;

    /**
     * @test
     *
     * @return void
     */
    public function test_list_of_ideas_show_on_main_page()
	{
		$categoryOne = Category::factory()->create([
			'name' => 'Category 1',
		]);

		$categoryTwo = Category::factory()->create([
			'name' => 'Category 2',
		]);

		$statusOpen = Status::factory()->create([
			'name' => 'Open',
			'classes' => 'bg-gray-200',
		]);
		
		$statusConsidering = Status::factory()->create([
			'name' => 'Considering',
			'classes' => 'bg-purple text-white',
		]);

		$ideaOne = Idea::factory()->create([
			'title' => 'My First Idea',
			'category_id' => $categoryOne->id,
			'status_id' => $statusOpen->id,
			'description' => 'Description of my first idea',
		]);
		
		$ideaTwo = Idea::factory()->create([
			'title' => 'My second Idea',
			'category_id' => $categoryTwo->id,
			'status_id' => $statusConsidering->id,
			'description' => 'Description of my second idea',
		]);
	
		$response = $this->get(route('idea.index'));

		$response->assertSuccessful();
		$response->assertSee($ideaOne->title);
		$response->assertSee($categoryOne->name);
		$response->assertSee($ideaOne->description);
		$response->assertSee($statusOpen->classes, false); // Fragile
		$response->assertSee($ideaTwo->title);
		$response->assertSee($categoryTwo->name);
		$response->assertSee($ideaTwo->description);
		$response->assertSee($statusConsidering->classes, false); // Fragile
    }

    /**
     * @test
     *
     * @return void
     */
    public function test_single_idea_shows_correctly_on_show_page()
    {
		$categoryOne = Category::factory()->create([
			'name' => 'Category 1',
		]);

		$statusOpen = Status::factory()->create([
			'name' => 'Open',
			'classes' => 'bg-gray-200',
		]);
		

		$idea = Idea::factory()->create([
			'title' => 'My First Idea',
			'category_id' => $categoryOne->id,
			'status_id' => $statusOpen->id,
			'description' => 'Description of my first idea',
		]);
		
		$response = $this->get(route('idea.show', $idea));

		$response->assertSuccessful();
		$response->assertSee($idea->title);
		$response->assertSee($categoryOne->name);
		$response->assertSee($idea->description);
    }

	/**
     * @test
     *
     * @return void
     */
    public function test_ideas_pagination_works()
    {
		$categoryOne = Category::factory()->create([
			'name' => 'Category 1',
		]);

		$statusOpen = Status::factory()->create([
			'name' => 'Open',
			'classes' => 'bg-gray-200',
		]);

		Idea::factory(Idea::PAGINATION_COUNT + 1)->create([
			'category_id' => $categoryOne->id,
			'status_id' => $statusOpen->id,
		]);

		$ideaOne = Idea::find(1);
		$ideaOne->title = 'My First Idea';
		$ideaOne->save();

		$ideaEleven = Idea::find(11);
		$ideaEleven->title = 'My Eleventh Idea';
		$ideaEleven->save();

		$response = $this->get(route('idea.index'));

		$response->assertSee($ideaEleven->title);
		$response->assertDontSee($ideaOne->title);

		$response = $this->get('/?page=2');

		$response->assertSee($ideaOne->title);
		$response->assertSee($ideaOne->description);
		$response->assertDontSee($ideaEleven->title);
    }

	/**
     * @test
     *
     * @return void
     */
	public function test_same_idea_title_different_slugs()
	{
		$categoryOne = Category::factory()->create([
			'name' => 'Category 1',
		]);

		$statusOpen = Status::factory()->create([
			'name' => 'Open',
			'classes' => 'bg-gray-200',
		]);

		$ideaOne = Idea::factory()->create([
			'title' => 'My first idea',
			'category_id' => $categoryOne->id,
			'status_id' => $statusOpen->id,
			'description' => 'Description for my first idea',
		]);

		$ideaTwo = Idea::factory()->create([
			'title' => 'My first idea',
			'category_id' => $categoryOne->id,
			'status_id' => $statusOpen->id,
			'description' => 'Description for my second idea',
		]);


		$response = $this->get(route('idea.show', $ideaOne));
		$response->assertSuccessful();;
		$this->assertTrue(request()->path() === 'idea/my-first-idea');

		$response = $this->get(route('idea.show', $ideaTwo));
		$response->assertSuccessful();
		$this->assertTrue(request()->path() === 'idea/my-first-idea-2');
	}
}
