@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row">
        <div class="col m8 s12 offset-m2">
            <h4 class="center-align blue-text text-darken-4">Perguntas Frequentes</h4>
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                  <div class="collapsible-header"><i class="material-icons">filter_1</i>Tenho que pagar alguma assinatura pelo uso da TOG?</div>
                  <div class="collapsible-body"><p><b>Não</b>. O usuário comum não irá pagar pela utilização da TOG.
                    Apenas as empresas parceiras (que irão oferecer seus produtos/serviços) deverão pagar uma pequena porcentagem dos negócios realizados por meio da plataforma. </p></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">filter_2</i>Como registro minha demanda?</div>
                  <div class="collapsible-body"><p>Basta se cadastrar na plataforma, fornecer os dados solicitados e efetuar seu login. A partir daí é só clicar no item +CRIAR UM ESFORÇO. 
                     <br><b>Atenção</b>: Lembre-se de verificar se sua demanda já foi registrada na TOG por outro usuário. Neste caso o melhor seria você integrar o evento mais antigo, para aumentar o número de usuários e concentrar as demandas em apenas um esforço coletivo.</p></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">filter_3</i>Como busco pelas demandas no site?</div>
                  <div class="collapsible-body"><p>A busca pode ser feita por categoria, por nome (pesquisa nominativa) ou por cidade. Basta inserir os dados que você busca no nosso campo de pesquisa.
                    Além disso, você pode analisar as demandas que estão em destaque na página inicial e conferir se você possui interesse em participar delas.</p></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">filter_4</i>Quando devo registrar minha demanda?</div>
                  <div class="collapsible-body"><p>Você deve registrar sua demanda na TOG sempre que precisar de um esforço colaborativo ou quando a oferta do mercado não suprir a sua necessidade. 
                    <br>-Precisa formar um grupo de viagem, mas não conhece pessoas suficientes?<br>
                    -Não utilizará todo o produto e gostaria de compartilhar o restante?
                    <br>-Quer encontrar pessoas para participar de promoções com desconto progressivo?
                      <br>-Não encontra horários de voos satisfatórios?</p>
                    <p>Então registre sua demanda na TOG: Um grupo possui mais força, agrega capital, divide custos e ainda atrai a atenção de empresas. Entre na TOG e faça Together!</p></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">filter_5</i>Como irei aprovar as ofertas feitas pelas empresas?</div>
                  <div class="collapsible-body"><p>A partir do momento em que o esforço coletivo receber uma oferta, todos os integrantes terão acesso aos dados da empresa ofertante, poderão analisar a oferta e votar pela sua aceitação ou não. 
                    A empresa terá acesso aos votos dos integrantes e poderá prestar serviços aos que se interessaram.</p></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">filter_6</i>Porque devo confiar no integrante do grupo?</div>
                  <div class="collapsible-body"><p>Em primeiro lugar, você deve confiar no integrante do grupo porque ele possui o mesmo interesse que você e depende da colaboração para alcançar seu objetivo. Ou seja, ele irá colaborar porque precisa de ajuda: os grupos são formados por colaborações mútuas, sendo que o objetivo do grupo é o mesmo objetivo de cada um dos integrantes.</p>
                      <p>Além disso, a TOG possui um sistema de avaliação do usuário e das empresas parceiras. Então, sempre avalie seus companheiros de esforços coletivos (grupos) e as empresas que ofereceram seus serviços. Desta forma, poderemos coletar informações e feedbacks sobre todos os envolvidos na TOG e assegurar que apenas pessoas sérias participem dos esforços.</p>
                      <p>Por fim, os dados pessoais dos usuários não são disponibilizados, para manter a privacidade de todos.</p></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">filter_7</i>Quais informações pessoais estarão disponibilizadas na plataforma?</div>
                  <div class="collapsible-body"><p>Nenhuma informação pessoal estará disponibilizada sem a expressa autorização do usuário: é o usuário que cria seu cadastro, incluindo as informações que quer divulgar em seu perfil.
                    <br>As informações pessoais como endereço, telefone e email são apenas mantidas pela plataforma para dar maior segurança interna, confirmando que a pessoa cadastrada realmente existe. No entanto, nenhum desses dados são divulgados pela TOG.</p></div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection