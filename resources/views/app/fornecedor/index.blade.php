<h1>Fornecedor</h1>


{{-- @php
    



@endphp --}}

{{-- @dd($fornecedores); --}}

{{-- @if(count($fornecedores)> 0 && count($fornecedores)< 10)
<h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores)> 10)
<h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem forn cadastrados</h3>

@endif --}}

Fornecedor: {{ $fornecedores[2]['nome'] }}
<br>
Status: {{ $fornecedores[2]['status'] }}
<br>
{{-- @if($fornecedores[0]['status']=='N')
    Fornecedor inativo
@endif --}}
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{ $fornecedores[1]['cnpj']}}
        @empty( $fornecedores [1]['cnpj'])
        - Vazio
        @endempty
    
@endisset