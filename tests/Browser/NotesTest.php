<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Notes
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
                    ->clickLink('Create Note') //menekan tombol Create Note
                    ->assertPathIs('/create-note') //memastikan diarahkan ke halaman create note
                    ->type('title', 'Judul') //mengisi title
                    ->type('description', 'Deskripsi') //mengisi description
                    ->press('CREATE') //menekan tombol Create Note
                    ->assertPathIs('/notes') //mengharapkan diarahkan ke halaman notes
                    ->assertSee('Judul') //memastikan halaman notes memuat tulisan Judul
                    ->assertSee('Deskripsi'); //memastikan halaman notes memuat tulisan Deskripsi


        });
    }
}
