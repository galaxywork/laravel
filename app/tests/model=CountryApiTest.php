<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class model=CountryApiTest extends TestCase
{
    use Makemodel=CountryTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatemodel=Country()
    {
        $model=Country = $this->fakemodel=CountryData();
        $this->json('POST', '/api/v1/model=Countries', $model=Country);

        $this->assertApiResponse($model=Country);
    }

    /**
     * @test
     */
    public function testReadmodel=Country()
    {
        $model=Country = $this->makemodel=Country();
        $this->json('GET', '/api/v1/model=Countries/'.$model=Country->id);

        $this->assertApiResponse($model=Country->toArray());
    }

    /**
     * @test
     */
    public function testUpdatemodel=Country()
    {
        $model=Country = $this->makemodel=Country();
        $editedmodel=Country = $this->fakemodel=CountryData();

        $this->json('PUT', '/api/v1/model=Countries/'.$model=Country->id, $editedmodel=Country);

        $this->assertApiResponse($editedmodel=Country);
    }

    /**
     * @test
     */
    public function testDeletemodel=Country()
    {
        $model=Country = $this->makemodel=Country();
        $this->json('DELETE', '/api/v1/model=Countries/'.$model=Country->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/model=Countries/'.$model=Country->id);

        $this->assertResponseStatus(404);
    }
}
