<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteNote extends DuskTestCase
{
    /**
     * A Dusk test example.
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
               ->assertPathIs('/dashboard') //Mengharapkan diarahkan ke halaman dashboard
               ->assertSee('Notes') //memastikan halaman dashboard memuat tulisan Notes
               ->clickLink('Notes') //menekan tombol Notes
               ->assertPathIs('/notes') //memastikan diarahkan ke halaman notes
               ->assertSee('Create Note') //memastikan halaman notes memuat tulisan Notes
               ->assertSee('Judul Edit') //memastikan halaman notes memuat tulisan Judul
               ->assertSee('Deskripsi Edit') //memastikan halaman notes memuat tulisan Deskripsi
               ->press('Delete') //menekan tombol Judul Delete
               ->assertPathIs('/notes'); //memastikan diarahkan ke halaman notes
        });
    }
}
