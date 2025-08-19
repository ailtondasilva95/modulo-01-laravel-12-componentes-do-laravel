# Aplicação de demostração de componentes do Laravel

> **NOTA**  
> Componentes do Laravel usando Bootstrap, JQuery, Select2, Bootstrap Fileinput, Bootstrap Icons, Flag Icons, Alpine, FlatPickr, FullCalendar e SweetAlert2

**Clone o repositório localmente:**

```sh
https://github.com/ailtondasilva95/modulo-01-laravel-componets.git nome-do-projeto
```

**Entrar na pasta do projecto 'nome-do-projeto':**

```sh
cd nome-do-projeto
```

Instalar dependências do PHP:

```sh
composer install
```

Instalar dependências do Node:

```sh
npm i && npm run build  
```

**Crie o arquivo .env:**

```sh
cp .env.example .env
```

**Gerar chave da aplicação:**

```sh
php artisan key:generate
```

> **NOTA**  
> Configure as informações do banco de dados e acordo com as informações de seu servidor de banco de dados

**Executar migrações de banco de dados:**

```sh
php artisan migrate
```

**Execute o semeador de banco de dados:**

```sh
php artisan db:seed
```

**Crie um link simbólico para o armazenamento das imagens:**

```sh
php artisan storage:link
```

**Execute o servidor de desenvolvimento:**

```sh
php artisan serve
```

Ou

```sh
composer run dev
```

> **NOTA**  
> Você está pronto para ir! Visite a url (http://127.0.0.1:8000) no seu navegador

## Como foi instalada os pacotes dependência do Node

**Pacote de dependência (Alpine.JS)**

> **O que é Alpine.JS?**  
> [É uma ferramenta robusta e minimalista para compor comportamento diretamente na sua marcação. Pense nela como o jQuery para a web moderna.](https://alpinejs.dev)

```sh
npm i alpinejs
```

> **Plugins do Alpine usado no projeto**

> Alpinejs Mask: serve para mascarar os inputs form

```sh
npm i @alpinejs/mask
```

**Pacote de dependência para desenvolvimento (Sass)**

> **O que é Sass**  
> [É a linguagem de extensão CSS de nível profissional mais madura, estável e poderosa do mundo.](https://sass-lang.com)

```sh
npm i -D sass
```

**Pacote de dependência (Bootstrap)**

> **O que é Bootstrap**  
> [É o kit de ferramentas front-end poderoso, extensível e repleto de recursos. Crie e personalize com Sass, utilize sistemas de grade e componentes pré-construídos e dê vida a projetos com poderosos plugins JavaScript.](https://getbootstrap.com)

```sh
npm i bootstrap @popperjs/core
```

**Pacote de dependência (Bootstrap Icons)**

> **O que é Icheck Bootstrap Icons?**  
> [É uma biblioteca de ícones gratuita, de alta qualidade e código aberto com mais de 2.000 ícones. Inclua-os como quiser — SVGs, sprites SVG ou fontes da web.](https://icons.getbootstrap.com)

```sh
npm i bootstrap-icons
```

**Pacote de dependência (Flag Icons)**

> **O que é Icheck Flag Icons?**  
> [É uma coleção selecionada de todas as bandeiras de países em SVG — além do CSS para facilitar a integração.](https://flagicons.lipis.dev)

```sh
npm i flag-icons
```

**Pacote de dependência (FlatPickr)**

> **O que é FlatPickr?**  
> [É um seletor de data e hora leve e poderoso.](https://flatpickr.js.org)

```sh
npm i flatpickr
```

**Pacote de dependência (Sweetalert2)**

> **O que é Sweetalert2?**  
> [É um substituto bonito, responsivo, personalizável e acessível para caixas pop-up do JavaScript.](https://sweetalert2.github.io)

```sh
npm i sweetalert2
```

**Pacote de dependência (FullCalendar)**

> **O que é FullCalendar?**  
> [FullCalendar é uma biblioteca JavaScript/jQuery para renderizar um calendário completo e interativo. É muito usado em aplicações web para mostrar eventos, agendamentos, reuniões, etc.](https://fullcalendar.io)

```sh
npm i @fullcalendar/core @fullcalendar/interaction @fullcalendar/daygrid  @fullcalendar/bootstrap5
```

> **Outros Plungins do FullCalendar** 
```sh
npm i @fullcalendar/list @fullcalendar/timegrid @fullcalendar/multimonth
```

**Pacote de dependência (jQuery)**

> **O que é jQuery?**  
> [É uma biblioteca JavaScript rápida, pequena e rica em recursos. Ela simplifica funções como navegação e manipulação de documentos HTML, tratamento de eventos, animação e Ajax com uma API fácil de usar que funciona em diversos navegadores. Com uma combinação de versatilidade e extensibilidade, o jQuery mudou a maneira como milhões de pessoas escrevem JavaScript.](https://jquery.com)

```sh
npm i jquery
```

**Pacote de dependência (Select2 e o seu tema para Bootstrap)**

> **O que é Select2?**  
> [ele oferece uma caixa de seleção (select) personalizável com suporte para pesquisa, marcação, conjuntos de dados remotos, rolagem infinita e muitas outras opções muito utilizadas.](https://select2.org)

```sh
npm i select2 select2-bootstrap-5-theme
```

**Pacote de dependência (Bootstrap-Fileinput)**

> **O que é Bootstrap-Fileinput?**  
> [Uma entrada de arquivos HTML 5 aprimorada para Bootstrap 5.x, 4.x e 3.x com pré-visualização para vários arquivos, oferece seleção múltipla, uploads de blocos retomáveis e muito mais. O plugin permite uma maneira simples de configurar um seletor de arquivos/controle de upload avançado, desenvolvido especialmente para funcionar com estilos CSS3 do Bootstrap 5.x, 4.x e 3.x. Ele aprimora ainda mais a funcionalidade de entrada de arquivos, oferecendo suporte à pré-visualização de uma ampla variedade de arquivos, como imagens, texto, HTML, vídeo, áudio, Flash e objetos. Além disso, inclui uploads baseados em AJAX, arrastar e soltar arquivos, visualizar o progresso do upload e pré-visualizar, adicionar ou excluir arquivos seletivamente.](http://plugins.krajee.com/file-input)

```sh
npm i bootstrap-fileinput
```
