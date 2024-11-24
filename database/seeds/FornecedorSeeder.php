<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;
class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // instânciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100@.com.br';
        $fornecedor->uf = 'GO';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();

        // o metódo create (cuidade com o metódo fillable da classe)
        Fornecedor::create([
            'nome' => 'Fornecedor2000',
            'site' => 'fornecedor2000.com.br',
            'uf' => 'GO',
            'email' => 'contato@fornecedor2000.com.br',
        ]);
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor3000',
            'site' => 'fornecedor3000.com.br',
            'uf' => 'SP',
            'email' => 'contato@fornecedor3000.com.br',
        ]);

    }
}
