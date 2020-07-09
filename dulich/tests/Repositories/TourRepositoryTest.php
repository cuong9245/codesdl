<?php namespace Tests\Repositories;

use App\Models\Tour;
use App\Repositories\TourRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class TourRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var TourRepository
     */
    protected $tourRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->tourRepo = \App::make(TourRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_tour()
    {
        $tour = factory(Tour::class)->make()->toArray();

        $createdTour = $this->tourRepo->create($tour);

        $createdTour = $createdTour->toArray();
        $this->assertArrayHasKey('id', $createdTour);
        $this->assertNotNull($createdTour['id'], 'Created Tour must have id specified');
        $this->assertNotNull(Tour::find($createdTour['id']), 'Tour with given id must be in DB');
        $this->assertModelData($tour, $createdTour);
    }

    /**
     * @test read
     */
    public function test_read_tour()
    {
        $tour = factory(Tour::class)->create();

        $dbTour = $this->tourRepo->find($tour->id);

        $dbTour = $dbTour->toArray();
        $this->assertModelData($tour->toArray(), $dbTour);
    }

    /**
     * @test update
     */
    public function test_update_tour()
    {
        $tour = factory(Tour::class)->create();
        $fakeTour = factory(Tour::class)->make()->toArray();

        $updatedTour = $this->tourRepo->update($fakeTour, $tour->id);

        $this->assertModelData($fakeTour, $updatedTour->toArray());
        $dbTour = $this->tourRepo->find($tour->id);
        $this->assertModelData($fakeTour, $dbTour->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_tour()
    {
        $tour = factory(Tour::class)->create();

        $resp = $this->tourRepo->delete($tour->id);

        $this->assertTrue($resp);
        $this->assertNull(Tour::find($tour->id), 'Tour should not exist in DB');
    }
}
