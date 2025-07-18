# Aplicação de demostração de componentes do Laravel

> **NOTA**  
> Componentes do Laravel usando Bootstrap, JQuery, Select2, Bootstrap Fileinput, Bootstrap Icons, Flag Icons e SweetAlert2

**Clone o repositório localmente:**

```sh
https://github.com/AiltonDaSilva10/laravel-component.git nome-do-projeto
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

**Pacote de dependência (Icheck Bootstrap)**

> **O que é Icheck Bootstrap?**  
> [É uma Caixas de seleção e botões de opção (radio/checkbox) em CSS puro para Bootstrap.](https://bantikyan.github.io/icheck-bootstrap)

```sh
npm i icheck-bootstrap
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
npm i fullcalendar
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

**Pacote de dependência (FilePond)**

```sh
npm i filepond
```

> **Todos plugins do FilePond**

1. [Image EXIF orientation](https://pqina.nl/filepond/docs/api/plugins/image-exif-orientation)

> O plugin Image EXIF orientation: Recupera os dados de orientação EXIF de imagens JPEG. Isso ajuda a orientar corretamente fotos tiradas em dispositivos móveis.
> O plugin [Image preview](https://pqina.nl/filepond/docs/api/plugins/image-preview/) usa essas informações para exibir a visualização correta. O plugin [Image transform](https://pqina.nl/filepond/docs/api/plugins/image-transform/) usa essas informações para transformar a imagem antes de enviá-la ao servidor. (Como outros plugins usam as informações lidas pelo plugin de orientação EXIF, registre este plugin primeiro.)

```sh
npm i filepond-plugin-image-exif-orientation
```

2. [Image validate size](https://pqina.nl/filepond/docs/api/plugins/image-validate-size)

> O plugin Image validate size: controla o bloqueio de imagens que são muito pequenas ou muito grandes.

```sh
npm i filepond-plugin-image-validate-size
```

3. [File size validation](https://pqina.nl/filepond/docs/api/plugins/file-validate-size)

> O plugin File size validation: controla o bloqueio de arquivos muito grandes.

```sh
npm i filepond-plugin-file-validate-size
```

4. [File type validation](https://pqina.nl/filepond/docs/api/plugins/file-validate-type)

> O plugin File type validation: controla o bloqueio de arquivos que são do tipo errado. Ao criar uma instância do FilePond com base em um arquivo de tipo de entrada, este plugin interpretará automaticamente o acceptvalor do atributo.

```sh
npm i filepond-plugin-file-validate-type
```

5. [Image transform](https://pqina.nl/filepond/docs/api/plugins/image-transform)

> O plugin Image transform: aplica as modificações de imagem fornecidas pelos [Image crop](https://pqina.nl/filepond/docs/api/plugins/image-crop) e [Image resize](https://pqina.nl/filepond/docs/api/plugins/image-resize/) antes do upload da imagem. Ele também pode alterar o formato do arquivo para JPEG ou PNG e compactar imagens.

```sh
npm i filepond-plugin-image-transform
```

6. [File metadata](https://pqina.nl/filepond/docs/api/plugins/file-metadata)

> O plugin File metadata: torna possível adicionar metadados iniciais a objetos de arquivo sem usar o setMetadatamétodo de item de arquivo.
> Adicione metadados definindo um genérico fileMetadataObjectpara o objeto FilePond ou passe propriedades personalizadas usando atributos de dados.

```sh
npm i filepond-plugin-file-metadata
```

7. [Image preview](https://pqina.nl/filepond/docs/api/plugins/image-preview)

> O plugin Image preview: renderiza uma visualização reduzida para imagens soltas.
> Combinado com o plugin [Image EXIF orientation](https://pqina.nl/filepond/docs/api/plugins/image-exif-orientation/), ele corrige automaticamente qualquer informação de rotação móvel para garantir que a imagem seja sempre exibida corretamente. Soltar imagens muito grandes pode afetar o desempenho. Navegadores compatíveis createImageBitmaptêm uma vantagem, pois podem renderizar os dados de bitmap em uma thread separada. Use a imagePreviewMaxFileSizeconfiguração para impedir a pré-visualização de imagens muito grandes.

```sh
npm i filepond-plugin-image-preview
```

8. [Image resize](https://pqina.nl/filepond/docs/api/plugins/image-resize)

> O plugin Image resize: redimensionamento de imagem calcula e adiciona automaticamente informações de redimensionamento.
> O plugin [Image preview](https://pqina.nl/filepond/docs/api/plugins/image-preview) usa essas informações para exibir a visualização correta. O plugin [Image transform](https://pqina.nl/filepond/docs/api/plugins/image-transform/) usa essas informações para transformar a imagem antes de enviá-la ao servidor.

```sh
npm i filepond-plugin-image-resize
```

9. [File encode](https://pqina.nl/filepond/docs/api/plugins/file-encode)

> O plugin File encode: Quando queremos enviar arquivos junto com o formulário clássico, encontramos uma limitação séria no navegador. O campo de entrada de arquivo é o único disponível para enviar arquivos a um servidor, mas seu valor não pode ser definido em navegadores mais antigos. O valor do campo de entrada de arquivo só pode ser modificado pelo usuário adicionando arquivos manualmente (em uma única ação). Para contornar isso, podemos codificar arquivos como strings base64 e adicioná-las a campos de entrada ocultos. Em seguida, decodificamos as strings no servidor para retornar a um objeto de arquivo.
> O plugin File Encode faz exatamente isso: codifica um arquivo descartado como uma string base64 e armazena a string em um campo de entrada oculto como uma string JSON. Ele usa uma string JSON para poder adicionar também o tamanho, o tipo, o nome e os metadados do arquivo.

```sh
npm i filepond-plugin-file-encode
```

10. [File poster](https://pqina.nl/filepond/docs/api/plugins/file-poster)

> O plugin File poster: torna possível mostrar uma imagem personalizada dentro do item de arquivo. Adicione uma posterpropriedade a um objeto de metadados de arquivo e defina uma URL de imagem como seu valor. O plugin File Poster irá pegá-la e renderizar a imagem dentro do item de arquivo, semelhante ao plugin de visualização de imagem.

```sh
npm i filepond-plugin-file-poster
```

11. [File rename](https://pqina.nl/filepond/docs/api/plugins/file-rename)

> O plugin File rename: nos permite renomear arquivos antes que eles sejam adicionados ao FilePond.

```sh
npm i filepond-plugin-file-rename
```

12. [Image crop](https://pqina.nl/filepond/docs/api/plugins/image-crop)

> O plugin Image crop: plugin de corte de imagem calcula e adiciona automaticamente informações de corte com base nas dimensões da imagem de entrada e na taxa de corte definida. O plugin [Image preview](https://pqina.nl/filepond/docs/api/plugins/image-preview) usa essas informações para exibir a visualização correta. O plugin [Image transform](https://pqina.nl/filepond/docs/api/plugins/image-transform/) usa essas informações para transformar a imagem antes de enviá-la ao servidor.

```sh
npm i filepond-plugin-image-crop
```

13. [Image edit](https://pqina.nl/filepond/docs/api/plugins/image-edit)

> O plugin Image edit: Se você estiver usando o FilePond com o Editor de Imagens Pintura, leia este [guia de instalação](https://pqina.nl/pintura/docs/v8/installation/filepond). Você não precisa mais do plugin de edição de imagens.
> O plugin Image Edit permite a integração de bibliotecas de edição de imagens como [Pintura](https://pqina.nl/pintura) para fazer modificações em arquivos de imagem carregados no FilePond.
> O plugin [Image preview](https://pqina.nl/filepond/docs/api/plugins/image-preview) será atualizado automaticamente com base nas alterações feitas. Se registrado, o plugin [Image transform](https://pqina.nl/filepond/docs/api/plugins/image-transform) aplicará automaticamente quaisquer alterações feitas ao objeto de arquivo.
> Observe que o plugin de edição de imagem requer que o plugin [Image preview](https://pqina.nl/filepond/docs/api/plugins/image-preview) esteja ativo.

```sh
npm i filepond-plugin-image-edit
```

13. [Image filter](https://pqina.nl/filepond/docs/api/plugins/image-filter)

> O plugin Image filter: adiciona informações de filtro ao arquivo na forma de uma Matriz de Cores.
> O plugin [Image preview](https://pqina.nl/filepond/docs/api/plugins/image-preview/) usa essas informações para exibir a visualização correta. O plugin [Image transform](https://pqina.nl/filepond/docs/api/plugins/image-transform/) usa essas informações para transformar a imagem antes de enviá-la ao servidor.

```sh
npm i filepond-plugin-image-filter
```

14. [Pintura e o seu plugin](https://pqina.nl/pintura)

> Pintura: Um poderoso editor de imagens JavaScript que se integra com todas as pilhas.
> Edição de imagens JavaScript de alto desempenho no navegador.
> A maneira mais rápida e fácil de adicionar recursos de edição de imagem ao seu SaaS, site ou aplicativo baseado na web.

```sh
npm i @pqina/pintura @pqina/filepond-plugin-image-editor
```
