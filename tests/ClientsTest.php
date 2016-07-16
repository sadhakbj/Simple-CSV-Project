<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClientsTest extends TestCase
{
    protected $baseUrl = 'http://localhost:8000';

    protected $clientsDetails = [
        'name'          => 'Bijaya Prasad Kuikel',
        'gender'        => 'Male',
        'phone'         => '9841920166',
        'email'         => 'bijaya.kuikel@gmail.com',
        'address'       => 'Banepa Nepal',
        'nationality'   => 'Nepali',
        'date_of_birth' => '1993-02-16',
        'education'     => 'Education',
        'contact_mode'  => 'Phone',
    ];

    /* @test */
    public function testClientsAddSection()
    {
        $this->cliPrint('Adding a new client to our system');

        $this->visit('/')
             ->click('Add New Data')
             ->seePageIs('/clients/create')
             ->see('Fill in the form to save the data to CSV')
             ->submitForm('Submit', $this->clientsDetails)
             ->seePageIs('/')
             ->cliPrint('Completed.');
    }


    /**
     * This prints the message in our test.
     * @param $message
     */
    private function cliPrint($message)
    {
        echo PHP_EOL;
        print_r($message);
        echo PHP_EOL;
        
    }


}
