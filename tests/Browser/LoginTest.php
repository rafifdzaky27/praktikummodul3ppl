<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Login
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') //Mengujungi halaman utama
                    ->assertSee('Modul 3') //Memastikan halaman utama memuat tulisan Modul 3
                    ->clickLink('Log in') //Menekan tombol login
                    ->assertPathIs('/login') //Memastikan diarahkan ke halaman login
                    ->type('email', 'user2@gmail.com') //Mengisi email
                    ->type('password', 'password') //Mengisi password
                    ->press('LOG IN') //Menekan tombol login
                    ->assertPathIs('/dashboard'); //Mengharapkan diarahkan ke halaman dashboard
        });
    }
}
