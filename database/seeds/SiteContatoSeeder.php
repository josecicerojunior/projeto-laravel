<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $contato = new SiteContato();
        // $contato->nome = 'Sistema SG';
        // $contato->telefone = '(62) 99999-9999';
        // $contato->email = 'contatos@sg.com.br';
        // $contato->motivo_contato = '1';
        // $contato->mensagem = 'Welcome to this app';
        // $contato->save();

        factory(SiteContato::class, 100)->create();


    }
}
