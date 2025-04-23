<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesEditTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group NotesEdit
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
                    ->assertSee('Judul') //memastikan halaman notes memuat tulisan Edit
                    ->clickLink('Edit') //menekan tombol Edit
                    ->assertPathIs('/edit-note-page/2') //memastikan diarahkan ke halaman edit note
                    ->assertSee('Edit Note') //memastikan halaman edit note memuat tulisan Edit Note
                    ->type('title', 'Judul Edit') //mengisi title
                    ->type('description', 'Deskripsi Edit') //mengisi description
                    ->press('UPDATE') //menekan tombol Update
                    ->assertPathIs('/notes') //mengharapkan diarahkan ke halaman notes
                    ->assertSee('Note has been updated') //memastikan halaman notes memuat tulisan Notes
                    ->assertSee('Judul Edit') //memastikan halaman notes memuat tulisan Judul Edit
                    ->assertSee('Deskripsi Edit'); //memastikan halaman notes memuat tulisan Deskripsi Edit

        });
    }
}
