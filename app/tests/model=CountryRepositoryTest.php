<?php

use App\Models\model=Country;
use App\Repositories\model=CountryRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class model=CountryRepositoryTest extends TestCase
{
    use Makemodel=CountryTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var model=CountryRepository
     */
    protected $model=CountryRepo;

    public function setUp()
    {
        parent::setUp();
        $this->model=CountryRepo = App::make(model=CountryRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatemodel=Country()
    {
        $model=Country = $this->fakemodel=CountryData();
        $createdmodel=Country = $this->model=CountryRepo->create($model=Country);
        $createdmodel=Country = $createdmodel=Country->toArray();
        $this->assertArrayHasKey('id', $createdmodel=Country);
        $this->assertNotNull($createdmodel=Country['id'], 'Created model=Country must have id specified');
        $this->assertNotNull(model=Country::find($createdmodel=Country['id']), 'model=Country with given id must be in DB');
        $this->assertModelData($model=Country, $createdmodel=Country);
    }

    /**
     * @test read
     */
    public function testReadmodel=Country()
    {
        $model=Country = $this->makemodel=Country();
        $dbmodel=Country = $this->model=CountryRepo->find($model=Country->id);
        $dbmodel=Country = $dbmodel=Country->toArray();
        $this->assertModelData($model=Country->toArray(), $dbmodel=Country);
    }

    /**
     * @test update
     */
    public function testUpdatemodel=Country()
    {
        $model=Country = $this->makemodel=Country();
        $fakemodel=Country = $this->fakemodel=CountryData();
        $updatedmodel=Country = $this->model=CountryRepo->update($fakemodel=Country, $model=Country->id);
        $this->assertModelData($fakemodel=Country, $updatedmodel=Country->toArray());
        $dbmodel=Country = $this->model=CountryRepo->find($model=Country->id);
        $this->assertModelData($fakemodel=Country, $dbmodel=Country->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletemodel=Country()
    {
        $model=Country = $this->makemodel=Country();
        $resp = $this->model=CountryRepo->delete($model=Country->id);
        $this->assertTrue($resp);
        $this->assertNull(model=Country::find($model=Country->id), 'model=Country should not exist in DB');
    }
}
