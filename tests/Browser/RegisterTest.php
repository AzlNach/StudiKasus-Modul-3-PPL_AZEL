<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * Test user registration functionality
     */
    public function testUserRegistration(): void
    {
        // Generate a unique email to avoid conflicts in the database
        
        $this->browse(function (Browser $browser)  {
            $browser->visit('/register')
                ->assertPathIs('/register')
                ->type('name', 'Test User')
                ->type('email',"tasdat@gmail.com")
                ->type('password', 'password123')
                ->type('password_confirmation', 'password123')
                ->press('REGISTER')
                ->assertPathIs('/dashboard');
        
                
                }); // Close the browse function
    } // Close the testUserRegistration method
}
