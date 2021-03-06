<?php

namespace Tests\Feature;

use App\Http\Livewire\CreateIdea;
use App\Models\Category;
use App\Models\Status;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire;
use Tests\TestCase;

class CreateIdeaTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     *
     * @return void
     */
    public function test_create_idea_form_does_not_show_when_logged_out()
    {
        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee('Please log in to create an idea.');
        $response->assertDontSee('Let us know what you would like and we\'ll take a look over!');
    }

    /**
     * @test
     *
     * @return void
     */
    public function test_create_idea_form_does_show_when_logged_in()
    {
        $response = $this->actingAs(User::factory()->create()->first())
            ->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee('Let us know what you would like and we\'ll take a look over!', false);
        $response->assertDontSee('Please log in to create an idea.');
    }

    /**
     * @test
     *
     * @return void
     */
    public function test_main_page_contains_create_idea_livewire_component()
    {   
        $this->actingAs(User::factory()->create()->first())
            ->get(route('idea.index'))
            ->assertSeeLivewire('create-idea');
    }

    /**
     * @test
     *
     * @return void
     */
    public function test_create_idea_form_validation_works()
    {
        Livewire::actingAs(User::factory()->create())
            ->test(CreateIdea::class)
            ->set('title', '')
            ->set('category', '')
            ->set('description', '')
            ->call('createIdea')
            ->assertHasErrors(['title', 'category', 'description'])
            ->assertSee('The title field is required');
    }

    /**
     * @test
     *
     * @return void
     */ 
    public function test_creating_an_idea_works_correctly()
    {
        $user = User::factory()->create()->first();

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        Category::factory()->create(['name' => 'Category 2']);

        Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);

        Livewire::actingAs($user)
            ->test(CreateIdea::class)
            ->set('title', 'My first idea')
            ->set('category', $categoryOne->id)
            ->set('description', 'This is my first idea')
            ->call('createIdea')
            ->assertRedirect('/');

        $response = $this->actingAs($user)->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee('My first idea');
        $response->assertSee('This is my first idea');

        $this->assertDatabaseHas('ideas', [
            'title' => 'My first idea'
        ]);
    }

    /**
     * @test
     *
     * @return void
     */ 
    public function test_creating_two_ideas_with_ideas_with_same_title_still_works_but_has_different_slugs()
    {
        $user = User::factory()->create()->first();

        $categoryOne = Category::factory()->create(['name' => 'Category 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Category 1']);

        Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);

        Livewire::actingAs($user)
            ->test(CreateIdea::class)
            ->set('title', 'My first idea')
            ->set('category', $categoryOne->id)
            ->set('description', 'This is my first idea')
            ->call('createIdea')
            ->assertRedirect('/');

        $this->assertDatabaseHas('ideas', [
            'title' => 'My first idea',
            'slug' => 'my-first-idea'
        ]);

        Livewire::actingAs($user)
            ->test(CreateIdea::class)
            ->set('title', 'My first idea')
            ->set('category', $categoryTwo->id)
            ->set('description', 'This is my second idea')
            ->call('createIdea')
            ->assertRedirect('/');

        $this->assertDatabaseHas('ideas', [
            'title' => 'My first idea',
            'slug' => 'my-first-idea-2'
        ]);
    }
}
