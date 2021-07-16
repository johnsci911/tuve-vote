<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Idea;
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

		$ideaOne = Idea::factory()->create([
			'title' => 'My First Idea',
			'category_id' => $categoryOne->id,
			'description' => 'Description of my first idea',
		]);
		
		$ideaTwo = Idea::factory()->create([
			'title' => 'My second Idea',
			'category_id' => $categoryTwo->id,
			'description' => 'Description of my second idea',
		]);
	
		$response = $this->get(route('idea.index'));

		$response->assertSuccessful();
		$response->assertSee($ideaOne->title);
		$response->assertSee($categoryOne->name);
		$response->assertSee($ideaOne->description);
		$response->assertSee($ideaTwo->title);
		$response->assertSee($categoryTwo->name);
		$response->assertSee($ideaTwo->description);
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

		$idea = Idea::factory()->create([
			'title' => 'My First Idea',
			'category_id' => $categoryOne->id,
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

		Idea::factory(Idea::PAGINATION_COUNT + 1)->create([
			'category_id' => $categoryOne->id,
		]);

		$ideaOne = Idea::find(1);
		$ideaOne->title = 'My First Idea';
		$ideaOne->save();

		$ideaEleven = Idea::find(11);
		$ideaEleven->title = 'My Eleventh Idea';
		$ideaEleven->save();

		$response = $this->get(route('idea.index'));

		$response->assertSee($ideaOne->title);
		$response->assertDontSee($ideaEleven->title);

		$response = $this->get('/?page=2');

		$response->assertSee($ideaEleven->title);
		$response->assertSee($ideaEleven->description);
		$response->assertDontSee($ideaOne->title);
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

		$ideaOne = Idea::factory()->create([
			'title' => 'My first idea',
			'category_id' => $categoryOne->id,
			'description' => 'Description for my first idea',
		]);

		$ideaTwo = Idea::factory()->create([
			'title' => 'My first idea',
			'category_id' => $categoryOne->id,
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
