<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Tour;

class TourApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_tour()
    {
        $tour = factory(Tour::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/tours', $tour
        );

        $this->assertApiResponse($tour);
    }

    /**
     * @test
     */
    public function test_read_tour()
    {
        $tour = factory(Tour::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/tours/'.$tour->id
        );

        $this->assertApiResponse($tour->toArray());
    }

    /**
     * @test
     */
    public function test_update_tour()
    {
        $tour = factory(Tour::class)->create();
        $editedTour = factory(Tour::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/tours/'.$tour->id,
            $editedTour
        );

        $this->assertApiResponse($editedTour);
    }

    /**
     * @test
     */
    public function test_delete_tour()
    {
        $tour = factory(Tour::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/tours/'.$tour->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/tours/'.$tour->id
        );

        $this->response->assertStatus(404);
    }
}
