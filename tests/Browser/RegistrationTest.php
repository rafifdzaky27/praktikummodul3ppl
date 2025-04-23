<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrationTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') //mengunjuni halaman utama
                    ->assertSee('Modul 3') //memastikan halaman utama memuat tulisan Modul 3
                    ->clickLink('Register') //menekan tombol register
                    ->assertPathIs('/register') //memastikan diarahkan ke halaman register
                    ->type('name', 'User2') //mengisi nama
                    ->type('email', 'user2@gmail.com') //mengisi email
                    ->type('password', 'password') //mengisi password
                    ->type('password_confirmation', 'password') //mengisi konfirmasi password
                    ->press('REGISTER') //menekan tombol register
                    ->assertPathIs('/dashboard'); //mengharapkan diarahkan ke halaman dashboard
                    


        });
    }
}
