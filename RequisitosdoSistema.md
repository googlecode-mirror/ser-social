# Introdução #

Este documento especifica os requisitos da rede social Ser Social, fornecendo aos desenvolvedores as informações necessárias para o projeto e implementação, assim como para a realização dos testes e homologação do sistema.


## **Visão geral do documento** ##
Além desta seção introdutória, as seções seguintes estão organizadas como descrito abaixo.<br>

<b>Seção 2 – Descrição geral do sistema:</b> apresenta uma visão geral do sistema, caracterizando qual é o seu escopo e descrevendo seus usuários.<br><br>

<b>Seção 3 – Requisitos funcionais:</b> Os requisitos funcionais se referem às funcionalidades que são executadas pelo usuário. Os requisitos são apresentados separadamente, de acordo com os atores do sistema. <br><br>

<b>Seção 4 – Requisitos não-funcionais:</b> especifica todos os requisitos não funcionais do sistema.<br><br>

<b>Seção 5 – Referências:</b> apresenta referências para outros documentos utilizados para a confecção deste documento.<br><br>

<b>Convenções, termos e abreviações</b><br><br>

A correta interpretação deste documento exige o conhecimento de algumas convenções e termos específicos, que são descritos a seguir.<br><br>

<b>Identificação dos requisitos</b><br>

Por convenção, a referência a requisitos é feita através do nome da subseção onde eles estão descritos, seguidos do identificador do requisito, de acordo com a especificação a seguir:<br>

Os requisitos devem ser identificados com um identificador único. A numeração inicia com o identificador <a href='RF001.md'>RF001</a> ou <a href='NF001.md'>NF001</a> e prossegue sendo incrementada à medida que forem surgindo novos requisitos.<br><br>

<b>Prioridades dos requisitos</b><br>

Para estabelecer a prioridade dos requisitos, nas seções 4 e 5, foram adotadas as denominações “essencial”, “importante” e “desejável”.<br>
Essencial é o requisito sem o qual o sistema não entra em funcionamento. Requisitos essenciais são requisitos imprescindíveis, que têm que ser implementados impreterivelmente.<br>
Importante é o requisito sem o qual o sistema entra em funcionamento, mas de forma não satisfatória. Requisitos importantes devem ser implementados, mas, se não forem, o sistema poderá ser implantado e usado mesmo assim.<br>
Desejável é o requisito que não compromete as funcionalidades básicas do sistema, isto é, o sistema pode funcionar de forma satisfatória sem ele. Requisitos desejáveis podem ser deixados para versões posteriores do sistema, caso não haja tempo hábil para implementá-los na versão que está sendo especificada.<br>
<br>
<h2><b>Descrição geral do sistema</b></h2>

<b>Abrangência e sistemas relacionados</b><br>
Redes Sociais Web são aplicações que tem como objetivo aumentar a interação entre pessoas, sendo usadas como meio de obtenção de informação, comunicação e entretenimento. Além disso, são grandes fontes de informação devido ao fato de que seus usuários são os responsáveis pela criação do conteúdo, fazendo com que o conjunto de contextos discutidos seja diversificado. Redes Sociais Web tem grande potencial de concentração de pessoas, o que significa que tem potencial de concentração de informação. Tal concentração de informação pode ser utilizada dentro de diversos contextos, vai depender da necessidade de seus usuários. Dentro desse contexto, esse trabalho tem como propósito apresentar conceitos de uma Rede Social Web, abordando algumas de suas principais características e conceitos relacionados, bem como apresentar o desenvolvimento de um protótipo de Rede Social Web.<br>
<br>
<br>
<h2><b>Requisitos funcionais</b></h2>

<ul><li><b><a href='RF001.md'>RF001</a> Gerenciar Acesso do Visitante</b></li></ul>

<ul><li><b><a href='RF002.md'>RF002</a> Gerenciar Acesso do Usuário</b></li></ul>

<ul><li><b><a href='RF003.md'>RF003</a> Gerenciar Amigos do Usuário</b></li></ul>

<ul><li><b><a href='RF004.md'>RF004</a> Gerenciar Recados do Usuário</b></li></ul>

<ul><li><b><a href='RF005.md'>RF005</a> Gerenciar Convites do Usuário</b></li></ul>

<ul><li><b><a href='RF006.md'>RF006</a> Gerenciar Álbuns do Usuário</b></li></ul>

<ul><li><b><a href='RF007.md'>RF007</a> Gerenciar Fotos do Usuário</b></li></ul>

<ul><li><b><a href='RF008.md'>RF008</a> Gerenciar Perfil do Usuário</b></li></ul>

<ul><li><b><a href='RF009.md'>RF009</a> Gerenciar Comentários nas Fotos do Usuário</b></li></ul>


<h2><b>Requisitos não-funcionais</b></h2>

<ul><li><b><a href='NF001.md'>NF001</a> Usabilidade</b></li></ul>

<ul><li><b><a href='NF002.md'>NF002</a> Desempenho</b></li></ul>

<ul><li><b><a href='NF003.md'>NF003</a> Portabilidade</b></li></ul>

<ul><li><b><a href='NF004.md'>NF004</a> Segurança</b></li></ul>

<h2><b>Referências</b></h2>
<ol><li>Furlan, J. D. Modelagem de Objetos através da UML. São Paulo, Makron Books, 1998.<br>
</li><li>Brett Mclaughlin Gary Pollice David West, Use a Cabeça! Análise e Projeto Orientado ao Objeto. São Paulo, Alta Books, 2007<br>
</li><li>Página de ajuda da Rede Social Facebook: <a href='https://www.facebook.com/help/basics'>https://www.facebook.com/help/basics</a>.<br>
</li><li>Página de ajuda da Rede Social Orkut: <a href='http://support.google.com/orkut/?hl=pt-BR'>http://support.google.com/orkut/?hl=pt-BR</a><<br>
</li><li>Página da disciplina Metodologia e Desenvolvimento de Software: www.cin.ufpe.br/~mds.