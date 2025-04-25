<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('login/')
                    ->type('email',"tasdat@gmail.com")
                    ->type('password', 'password123')
                    ->press('LOG IN')
                    ->visit('/create-note')
                    ->assertSee('title')
                    ->type('title', 'Test Note')
                    ->assertSee('description')
                    ->type('description', 'This is a test note.')
                    ->press('CREATE');
        });
    }
}
