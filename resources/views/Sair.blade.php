<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
     <nav>
        <ul>
            <a href=" {{ url('/sair') }} "><li>SAIR</li></a>
            <a href=" {{ url('/cadastrar') }} "><li>CADASTRAR</li></a>
            <a href=" {{ url('/meu-perfil') }} "><li>MEU PERFIL</li></a>
        </ul>
     </nav>
    </div>

    <h1>Essa é a tela de (Sair)</h1>

</body>
</html>
