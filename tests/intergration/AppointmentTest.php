<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use App\services\AppointmentService;

class AppointmentTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/');

        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }

/** @test */
    public function it_getall_a_new_appointment()
    {
        $servicesOBJ=new AppointmentService();

        $this->assertEquals(
           'all' , $servicesOBJ->getAll()
        );
    }


    /** @test */
    public function it_create_a_new_appointment()
    {
        $servicesOBJ=new AppointmentService();

        $this->assertEquals(
            20 , $servicesOBJ->create()
        );
    }


    /** @test */
    public function it_update_a_new_appointment()
    {
        $servicesOBJ=new AppointmentService();

        $this->assertEquals(
            'update' , $servicesOBJ->update(1)
        );
    }


    /** @test */
    public function it_read_a_new_appointment()
    {
        $servicesOBJ=new AppointmentService();

        $this->assertEquals(
            1 , $servicesOBJ->read(1)
        );
    }


    /** @test */
    public function it_delete_a_new_appointment()
    {
        $servicesOBJ=new AppointmentService();

        $this->assertEquals(
            'delete' , $servicesOBJ->delete(6)
        );
    }
}