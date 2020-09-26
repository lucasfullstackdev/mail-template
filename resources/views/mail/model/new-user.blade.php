@extends('mail.base-model.company')

@section('mail-body')
    <div class="container-fluid">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <i class="fas fa-certificate text-info display-3"></i>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2 class="text-center my-2">Bem-vindo!</h2>
                <p>
                    Olá <span class="font-weight-bold">Lucas Santana</span>, <br><br>

                    Estamos muito animados com seu cadastro! Para alegrá-lo um pouco aqui vai uma frase que move todos aqui da 
                    <a href="http://lucasfullstackdev.com.br" target="_blank" class="text-danger font-weight-bold stretched-link">lucasfullstackdev</a>
                    <br>
    
                    <blockquote class="blockquote text-center">
                        "Tudo o que um sonho precisa para ser realizado é alguém que acredite que ele possa ser realizado"
                        <footer class="blockquote-footer">
                            <cite title="Título da fonte">Roberto Shinyashiki</cite>
                        </footer>
                    </blockquote>
                </p>
            </div>
        </div>
    </div>
@endsection