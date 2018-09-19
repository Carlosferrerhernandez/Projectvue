<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsuarioTest extends TestCase
{
    /**
     * Un controlador de index prueba usuario.
     * 
     * @test
     */
    public function cargar_pagina_lista_usuarios()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Mostrar usuarios');
    }
}
