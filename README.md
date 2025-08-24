# Aplicação de Demonstração de Componentes do Laravel

> **NOTA**
> Este projeto demonstra o uso de **componentes do Laravel** com integração de pacotes modernos do ecossistema web:  
> Bootstrap, jQuery, Select2, Bootstrap Fileinput, Bootstrap Icons, Flag Icons, Alpine.js, Flatpickr, FullCalendar, SweetAlert2, Day.js e Chart.js.

---

## 🚀 Tecnologias Utilizadas

- [Laravel 12](https://laravel.com)
- [Bootstrap 5](https://getbootstrap.com)
- [Bootstrap Icons](https://icons.getbootstrap.com)
- [Flag Icons](https://flagicons.lipis.dev)
- [jQuery](https://jquery.com)
- [Alpine.js](https://alpinejs.dev) (+ plugin **Mask**)
- [Flatpickr](https://flatpickr.js.org)
- [SweetAlert2](https://sweetalert2.github.io)
- [FullCalendar](https://fullcalendar.io)
- [Select2](https://select2.org) + tema **Bootstrap 5**
- [Bootstrap Fileinput](http://plugins.krajee.com/file-input)
- [Day.js](https://day.js.org)
- [Chart.js](https://www.chartjs.org)

---

## 📦 Pré-requisitos

Antes de começar, você precisará ter instalado em sua máquina:

- [PHP 8.2+](https://www.php.net)
- [Composer](https://getcomposer.org)
- [Node.js & NPM](https://nodejs.org)
- Banco de dados compatível (MySQL, MariaDB, PostgreSQL ou SQLite)

---

## 📂 Estrutura de Assets

-   `resources/js/app.js` → Arquivo principal de JavaScript
-   `resources/css/app.css` → Arquivo principal de estilos (CSS)
-   `resources/sass/app.scss` → Arquivo principal de estilos (Sass)

---

## ⚙️ Configurações

### 1. Vite

Configuração para compilar **JavaScript** e **Sass** de forma otimizada.

### 2. Bootstrap

Adicionadas as variáveis **dark mode** e suporte ao
`data-bs-theme="dark"` aplicado diretamente na tag `<html>`.

### 3. Botão Customizado

Criada a classe personalizada: - `.btn-default`

Essa classe suporta **modo claro** e **modo escuro** via Bootstrap.

### 4. Select2

Customizado para manter consistência
visual no modo claro/escuro `data-bs-theme="light"` `data-bs-theme="dark"`.

---

## 📦 Scripts e Estilos Importados

### JavaScript (`bootstrap.js`)

-   Alpine
-   Bootstrap JS (dropdowns, popovers, tooltips, etc.)
-   SweetAlert2
-   jQuery
-   Bootstrap Fileinput
-   Day.js
-   FlatPickr
-   FullCalendar
-   Chart.js

### CSS (`app.css`)

-   Bootstrap Icons
-   Select2
-   Select2 Bootstrap 5 Theme
-   Flag Icons
-   SweetAlert2
-   Flatpickr
-   Bootstrap Fileinput
-   Criação da classe `btn-default`

### Sass (`app.scss`)

-   Bootstrap (com cores adicionais do Bootstrap `text-color-100` a `900, bg-color-subtle`, text-color-emphasis e custumização do input-group)

---

## ⚙️ Instalação

### 1. Clone o repositório
```sh
git clone https://github.com/ailtondasilva95/modulo-01-laravel-components.git nome-do-projeto
```

### 2. Entre na pasta do projeto
```sh
cd nome-do-projeto
```

### 3. Instale as dependências do PHP
```sh
composer install
```

### 4. Instale as dependências do Node
```sh
npm i && npm run build
```

### 5. Configure o arquivo `.env`
```sh
cp .env.example .env
```

Edite as credenciais de banco de dados conforme o seu ambiente.

### 6. Gere a chave da aplicação
```sh
php artisan key:generate
```

### 7. Rode as migrações
```sh
php artisan migrate
```

### 8. Execute o seeder
```sh
php artisan db:seed
```

### 9. Inicie o servidor
```sh
php artisan serve
```

> **NOTA**  
> Agora você já pode acessar o projeto em [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 📥 Instalação manual dos pacotes Node

Abaixo estão os principais pacotes utilizados e como foram instalados:

- **Sass**
  ```sh
  npm i -D sass
  ```

- **Alpine.js**
  ```sh
  npm i alpinejs @alpinejs/mask
  ```

- **Bootstrap**
  ```sh
  npm i bootstrap @popperjs/core
  ```

- **jQuery**
  ```sh
  npm i jquery
  ```

- **Bootstrap Icons**
  ```sh
  npm i bootstrap-icons
  ```

- **Flag Icons**
  ```sh
  npm i flag-icons
  ```

- **Flatpickr**
  ```sh
  npm i flatpickr
  ```

- **SweetAlert2**
  ```sh
  npm i sweetalert2
  ```

- **FullCalendar**
  ```sh
  npm i fullcalendar @fullcalendar/bootstrap5
  ```

- **Day.js**
  ```sh
  npm i dayjs
  ```

- **Select2 + Tema Bootstrap 5**
  ```sh
  npm i select2 select2-bootstrap-5-theme
  ```

- **Bootstrap Fileinput**
  ```sh
  npm i bootstrap-fileinput
  ```

- **Chart.js**
  ```sh
  npm i chart.js
  ```
---

## Os componetes criados foram:

- **Modal**
  ```sh
  php artisan make:component Modal
  ```
---

- **Alert**
  ```sh
  php artisan make:component Alert
  ```
---

- **Avatar**
  ```sh
  php artisan make:component Avatar
  ```
---

- **Badge**
  ```sh
  php artisan make:component Badge
  ```
---

- **Button**
  ```sh
  php artisan make:component Button
  ```
---

- **Chart**
  ```sh
  php artisan make:component Chart
  ```
---

- **FullCalendar**
  ```sh
  php artisan make:component FullCalendar
  ```
---

- **Textarea**
  ```sh
  php artisan make:component Form/Textarea
  ```
---

- **Select**
  ```sh
  php artisan make:component Form/Select
  ```
---

- **Input**
  ```sh
  php artisan make:component Form/Input
  ```
---

- **Date**
  ```sh
  php artisan make:component Form/Date
  ```
---

- **File**
  ```sh
  php artisan make:component Form/File
  ```
---

- **Radio**
  ```sh
  php artisan make:component Form/Radio
  ```
---

- **Checkbox**
  ```sh
  php artisan make:component Form/Checkbox
  ```
---

- **FileAvatar**
  ```sh
  php artisan make:component Form/FileAvatar
  ```
