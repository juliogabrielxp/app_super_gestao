<h1>Principal (view)</h1>

<ul>
    <li>
        <a href="{{route('site.index')}}">Principal</a>
    </li>
    <li>
        <a href="{{route('site.sobre-nos')}}">Sobre nós</a>
    </li>
    <li>
        <a href="{{route('site.contato')}}">contato</a>
    </li>
</ul>

@isset($fornecedores)
    <h1>O cpf do fornecedor {{$fornecedores[0]['Wurth']}} é 
        @isset($fornecedores[0]['CPF'])
        {{$fornecedores[0]['CPF']}}
        @endisset
@endisset



