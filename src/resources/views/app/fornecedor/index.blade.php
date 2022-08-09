<h1>Fornecedor</h1>

{{-- TESTE de comentario com o blade--}}

@php
#@dd($fornecedores) #como se fosse o var_dump nativo do php
#@unless como se negasse o IF, if(!<codicação)
#@empty verifica se a variavel está vazia.
@endphp

@isset($fornecedores)
    @if(count($fornecedores) > 0)
        <h2>Fornecedores Cadastrados:</h2>
        @foreach ($fornecedores as $key => $value)
            <p><b>Nome:</b> {{$value["nome"]}} | 
               <b>Status:</b> 
                    @switch($value["status"])
                        @case("A")
                            Ativo
                            @break
                        @case("I")
                            Inativo
                            @break
                        @default
                            Não definido
                            @break
                    @endswitch
                    |
               <b>Cnpj:</b> {{$value["cnpj"] ?? "Não informado"}} |
               <b>Telefone:</b> {{$value["ddd"] ?? "Não informado"}} {{$value["tel"] ?? ""}}
               <hr>
            </p>
            @if($loop->last)
                <h3>Total de registros: {{$loop->count}}</h3>
            @endif
        @endforeach
    @else
        <h3>Não existe nenhum fornecedor cadastrado !</h3>     
    @endif
@endisset