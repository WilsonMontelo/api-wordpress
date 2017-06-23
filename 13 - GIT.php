<!-- OBS: Antes de fazer esse prosedimento você precisa ter o git -->
<!-- instalado em sua maquina. -->

<!-- Clonando Repositorio -->
<!-- 1° Configure nome e email que ficara salvo em .gitconfig -->

$ git config --global user.name "YOUR NAME"
$ git config --global user.email "YOUR EMAIL ADDRESS"

<!-- 2° Clonando diretorio -->

git clone https://github.com/<username>/site.git

<!-- 3° Comandos Iniciais Git -->

(git add) <arquivos...> Este comando adiciona o(s) arquivo(s) em um 
lugar que chamamos de INDEX, que funciona como uma área do git no 
qual os arquivos possam ser enviados ao Github. É importante saber 
que ADD não está adicionando um arquivo novo ao repositório, mas sim 
dizendo que o arquivo (sendo novo ou não) está sendo preparado para 
entrar na próxima revisão do repositório.

(git commit -m) "comentário qualquer" Este comando realiza o que chamamos 
de “commit”, que significa pegar todos os arquivos que estão naquele lugar 
INDEX que o comando add adicionou e criar uma revisão com um número e um 
comentário, que será vista por todos.

(git push) Push (empurrar) é usado para publicar todos os seus commits para o 
github. Neste momento, será pedido a sua senha.

(git status) Exibe o status do seu repositório atual

(touch) Comando para criar um novo arquivo no repositorio local

======================================================================

<!-- Imagine que você deu o commit e errou a mensagem -->

Imagine que você tenha errado a mensagem que escreveu no commit ou simplesmente
queira melhorar a descrição do seu trabalho. Você já comitou a mensagem mas ainda 
não fez o push das suas modificações para o servidor. Nesse caso você usa a 
flag (--amend).

$ git commit --amend

<!-- Git Pull Entenda como funciona -->

(git pull) Ainda existe um comando importante neste processo, que é o git pull. Ele 
é usado para trazer todas as modificações que estão no github para o seu projeto 
local. Isso é vital quando existem projetos mantidos por mais de uma pessoa, ou se 
você possui duas máquinas e precisa manter a sincronia entre elas. Supondo que você 
possui uma máquina no trabalho e outra em casa. Ambas tem o repositório local ligado 
ao github. Quando você executar um git push em uma das máquinas, terá que realizar 
um git pull na outra.

<!-- Entendendo o que é um Branche -->

Branches e mergers sempre foram os pesadelos de qualquer gerenciador de versão (ok, do svn…). 
No git, o conceito de branch tornou-se algo muito simples e fácil de usar. Mas quando que temos 
que criar um branch? Imagine que o seu site está pronto, tudo funcionando perfeitamente, mas 
surge a necessidade de alterar algumas partes dele como forma de melhorá-lo. Além disso, você 
precisa manter estas alterações tanto no computador de casa quanto do trabalho. Com isso temos 
um problema, se você começa a alterar os arquivos em casa, para na metade da implementação, e 
precisa terminar no trabalho, como você iria comitar tudo pela metade e deixar o site incompleto?

Para isso existe o conceito de branch, que é justamente ramificar o seu projeto em 2, como se cada 
um deles fosse um repositório, e depois juntá-lo novamente. Voltando ao github, perceba o detalhe da 
imagem a seguir.

<!-- FONTE -->
https://tableless.com.br/tudo-que-voce-queria-saber-sobre-git-e-github-mas-tinha-vergonha-de-perguntar/