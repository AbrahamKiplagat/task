<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Tasks;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_view() {
    // Arrange: Create a task in the database
    $task = Tasks::factory()->create();

    // Act: Make a GET request to the 'tasks' route
    $response = $this->get('/tasks');

    // Assert: Check that the response status is 200 (OK)
    $response->assertStatus(200);

    // Assert: Check that the response contains the task's data
    $response->assertSee($task->name);
   // $response->assertSee($task->description);
}
}