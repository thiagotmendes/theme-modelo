<h1> theme-modelo </h1>
Inicia o processo de desenvolvimento de tema

***********************************************

Os arquivos deverão ser iniciados em branco, assim existe a liberadade de desenvolvimento

Para iniciar o processo é necessário ter o Grunt e o Bower instalados na maquina

<h3> Node.js </h3>

Caso ainda não tenha o Node.js instalado utilize o link para baixar e instalar em sua maquina.

<a href="https://nodejs.org/en/"> Node.js </a>

Após a instalação utilize o codigo node -v para visualizar a versão instalada e verificar se a instalação ocorreu normalmente.

<h3> Grunt </h3>

Para utilizar o grunt deve se primeiramente realizar a instalação global, para isso utilize o codigo:

# npm install -g grunt-cli

Após realizado dentro do diretorio do tema basta utilziar o compando:

# npm install

Assim todos os plugins necessários para o projeto serão instalados

<h3> Bower </h3>

Assim como o Grunt deve se primeiro realizar a instalação global:

# npm install -g bower

Após instalado, dentro do diretorio do tema basta urilizar o comando

# bower install

Assim todos os componentes necessários para o desenvolmento serão instalados como dependencia.

<h3> Iniciando os assets do tema </h3>

após toda a instalação feita basta utilizar os comandos para rodar as tasks.

# grunt site

Iniciará o projeto e irá criar todas as pastas com seus assets já inclusos.

Constam como dependencias neste projeto:

bootstrap <br>
font-awesome <br>
animate.css <br>
slick-carousel <br>
wow.js <br>
bxslider-4 <br>
isotope

Depois de criado basta utilizar o comando

# grunt live

Este comando fica "vigiando" as alterações realizadas nos arquivos sass e js e atualziam automaticamente.

OBS: Os arquivos finalizados são minificados automaticamente.
