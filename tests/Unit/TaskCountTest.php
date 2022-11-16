<?php

namespace Tests\Unit;

use App\Models\Task;
use PHPUnit\Framework\TestCase;

class TaskCountTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_task()
    {
        $task = new Task([
            'project_id' => fake()->numberBetween(1,50),
            'name' => 'TPS',
            'description' => fake()->text(),
            'status' => fake()->randomElement(['PENDING','ON PROGRESS','DONE']),
        ]);
        $this->assertEquals('TPS', $task->takeOne());
        $this->assertNull($task->takeOne());
    }
}
