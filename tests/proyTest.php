<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class proyTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testactualizar_aprendiz()
    {
         $this->visit('editar/1')
        ->see('actualizar aprendiz')
        ->type('juan','Nombre')
        ->type('','Apellido')
        ->type('','Identificacion')
        ->type('','Telefono')
        ->type('','Correo')
        ->type('','Direccion')
        ->type('','Genero')

        ->press('actualizar aprendiz');
    }

   





}
