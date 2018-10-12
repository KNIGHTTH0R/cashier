<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UnitsTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    protected function setUp()
    {
        parent::setUp();

        $this->signIn();
    }

    /**
     * A basic test example.
     * @test
     * @return void
     *
     */
    public function it_can_access_units_list_page()
    {
        $response = $this->get(route('unit.index'));
        $response->assertStatus(200);
    }

    /**
     * it_can_create_new_unit
     * @test
     * @return void
     */
    public function it_can_create_new_unit()
    {
        $data = [
            'name' => $this->faker->word,
            'code' => $this->faker->word
        ];
        $response = $this->post(route('unit.store'), $data);

        $response->assertRedirect(route('unit.index'));
        $this->assertDatabaseHas('units', $data);
    }
}
