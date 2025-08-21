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

## Como eles foram configurados?

Configuração do arquivo `resources/sass/app.scss`

```scss
// 1. Importa as funções do Bootstrap (necessárias para manipular mapas e variáveis)
@import "bootstrap/scss/functions";

// 1.1. Importa as variáveis padrão do Bootstrap (como $primary, $indigo etc.)
@import "bootstrap/scss/variables";

// 1.2. Adicionar cores personalizadas ao bootstrap para btn-color, text-color, bg-color
$theme-colors: map-merge(
    $theme-colors,
    (
        "indigo": indigo,
        "purple": purple,
        "orange": orange,
        "yellow": yellow,
        "green": green,
        "black": black,
        "blue": blue,
        "gray": gray,
        "teal": teal,
        "cyan": cyan,
        "pink": pink,
        "red": red,
    )
);

// 1.3. Importa mapas auxiliares do Bootstrap (ex: paletas de cores como $blues)
@import "bootstrap/scss/maps";

// 1.4. Importa definições iniciais dos utilitários CSS do Bootstrap
@import "bootstrap/scss/utilities";

// 1.5. Mescla todas as paletas de cor disponíveis (do Bootstrap) em um único mapa
// ⚠️ ATENÇÃO: Isso gerará novos .text-color-{level} (por exemplo, .text-color-100 a 900)
$utilities: map-merge(
    $utilities,
    (
        "color":
            map-merge(
                map-get($utilities, "color"),
                (
                    values:
                        map-merge(
                            map-get(map-get($utilities, "color"), "values"),
                            (
                                map-merge-multiple(
                                    $indigos,
                                    $purples,
                                    $oranges,
                                    $yellows,
                                    $greens,
                                    $teals,
                                    $blues,
                                    $pinks,
                                    $cyans,
                                    $grays,
                                    $reds
                                )
                            )
                        ),
                )
            ),
    )
);

// 1.6. Importa o restante do Bootstrap
@import "bootstrap/scss/bootstrap";

// .bg-color-subtle .text-color-emphasis
@each $color, $value in $theme-colors {
    .bg-#{$color}-subtle {
        background-color: rgba(var(--bs-#{$color}-rgb), 0.1);
    }

    .text-#{$color}-emphasis {
        color: rgba(var(--bs-#{$color}-rgb), 0.75);
    }
}

/* === INPUT GROUP UNIFICADO - Versão Completa === */

.input-group {
    /* Unir elementos removendo bordas internas */
    > :not(:first-child):not(:last-child) {
        border-radius: 0;
        border-left: none;
        border-right: none;
    }

    > :first-child:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
        border-right: none;
    }

    > :last-child:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-left: none;
    }

    /* Background transparente para input-group-text */
    > .input-group-text {
        background-color: transparent;
        border-color: $input-border-color;
    }

    /* Estilos comuns para form-control e form-select */
    > .form-control,
    > .form-select {
        border-color: $input-border-color;

        // Remover foco individual
        &:focus {
            border-color: $input-border-color;
            box-shadow: none;
        }
    }

    /* Foco do grupo inteiro */
    &:focus-within {
        box-shadow: $input-btn-focus-box-shadow;
        border-radius: $input-border-radius;
        position: relative;
        z-index: 3;

        /* Aplicar cor de foco a todos os elementos */
        > .input-group-text,
        > .form-control,
        > .form-select {
            border-color: $input-focus-border-color;
        }
    }
}

/* Remover foco individual de todos os elementos */
.form-control:focus,
.form-select:focus {
    box-shadow: none;
}

/* Ajustes para tamanhos diferentes */
.input-group {
    &.input-group-sm {
        &:focus-within {
            border-radius: $input-border-radius-sm;
        }
    }

    &.input-group-lg {
        &:focus-within {
            border-radius: $input-border-radius-lg;
        }
    }
}

/* Correção para form-select (garantir altura consistente) */
.form-select {
    &:focus {
        box-shadow: none;
    }
}
```

Configuração do arquivo `resources/css/app.css`

```css
/* 1. Importar a fonte de letra */
@import url("https://fonts.googleapis.com/css2?family=Kode+Mono:wght@400..700&display=swap");

/* 2. Importar o Bootstrap Icons */
@import "bootstrap-icons/font/bootstrap-icons.min.css";

/* 3. Importar o Flag Icons */
@import "flag-icons/css/flag-icons.min.css";

/* 4. Importar o Select2 e o seu tema para Bootstrap */
@import "select2/dist/css/select2.min.css";
@import "select2-bootstrap-5-theme/dist/select2-bootstrap-5-theme.min.css";

/* 5. Importar flatpickr */
@import "flatpickr/dist/flatpickr.min.css";
@import "flatpickr/dist/plugins/monthSelect/style.css";
@import "flatpickr/dist/plugins/confirmDate/confirmDate.css";

/* 6. Importar o  bootstrap-fileinput */
@import "bootstrap-fileinput/css/fileinput.min.css";

body {
    font-family: "Kode Mono", monospace;
}

/* Classes customizadas (btn-default) */
.btn-default {
    /* @extend .btn; */
    --bs-btn-color: #333333;
    --bs-btn-border-color: #cccccc;
    --bs-btn-hover-color: #333333;
    --bs-btn-hover-bg: #e6e6e6;
    --bs-btn-hover-border-color: #cccccc;
    --bs-btn-focus-shadow-rgb: 140, 140, 140;
    --bs-btn-active-color: #333333;
    --bs-btn-active-bg: #d4d4d4;
    --bs-btn-active-border-color: #cccccc;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #333333;
    --bs-btn-disabled-border-color: #cccccc;
    --bs-gradient: none;
}

/* Ajustes para o btn-default suportar tambem o modo Dark do Bootstrap 5 */
:root[data-bs-theme="dark"] .btn-default {
    --bs-btn-color: #f8f9fa;
    --bs-btn-border-color: #6c757d;
    --bs-btn-hover-color: #f8f9fa;
    --bs-btn-hover-bg: #495057;
    --bs-btn-hover-border-color: #6c757d;
    --bs-btn-focus-shadow-rgb: 173, 181, 189;
    --bs-btn-active-color: #f8f9fa;
    --bs-btn-active-bg: #343a40;
    --bs-btn-active-border-color: #6c757d;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #f8f9fa;
    --bs-btn-disabled-border-color: #6c757d;
}

/* Ajustes para o SweetAlert2 suportar tambem o modo Dark do Bootstrap 5 */
:root[data-bs-theme="dark"] {
    --swal2-dark-theme-black: var(--bs-body-bg);
    --swal2-dark-theme-white: #e1e1e1;
    --swal2-background: var(--bs-body-bg);
    --swal2-color: var(--bs-light);
    --swal2-footer-border-color: 1px solid var(--bs-gray-700);
    --swal2-input-background: color-mix(
        in srgb,
        var(--bs-body-bg),
        var(--bs-light) 10%
    );
    --swal2-validation-message-background: color-mix(
        in srgb,
        var(--bs-body-bg),
        var(--bs-light) 10%
    );
    --swal2-validation-message-color: var(--bs-light);
    --swal2-timer-progress-bar-background: rgba(255, 255, 255, 0.7);
}
```

Configuração do arquivo `resources/js/bootstrap.js`

```js
import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

// 1. Importar o Alpine
import Alpine from "alpinejs";
import mask from "@alpinejs/mask";
Alpine.plugin(mask);
Alpine.start();

// 2. Importar o Bootstrap
import * as bootstrap from "bootstrap";
window.bootstrap = bootstrap;

// 3. Importar o SweetAlert2
import Swal from "sweetalert2";
window.Swal = Swal;

// 4. Importar o jQuery
import jQuery from "jquery";
window.$ = window.jQuery = jQuery;

// 5. Importar o Select2
import select2 from "select2";
select2();

// 6. Importar o FlatPickr
import flatpickr from "flatpickr";
window.flatpickr = flatpickr;

// 6.1. Importar os plugins do FlatPickr
import CONFIRM_DATE_PLUGIN_FLAPICKR from "flatpickr/dist/plugins/confirmDate/confirmDate";
import WEEK_SELECT_PLUGIN_FLAPICKR from "flatpickr/dist/plugins/weekSelect/weekSelect";
import MONTH_SELECT_PLUGIN_FLAPICKR from "flatpickr/dist/plugins/monthSelect/index";
window.CONFIRM_DATE_PLUGIN_FLAPICKR = CONFIRM_DATE_PLUGIN_FLAPICKR;
window.MONTH_SELECT_PLUGIN_FLAPICKR = MONTH_SELECT_PLUGIN_FLAPICKR;
window.WEEK_SELECT_PLUGIN_FLAPICKR = WEEK_SELECT_PLUGIN_FLAPICKR;

// 6.2. Importar os idiomas do FlatPickr
import { Portuguese } from "flatpickr/dist/l10n/pt";
import { Mandarin } from "flatpickr/dist/l10n/zh";
import { Spanish } from "flatpickr/dist/l10n/es";
import { Italian } from "flatpickr/dist/l10n/it";
import { Russian } from "flatpickr/dist/l10n/ru";
import { German } from "flatpickr/dist/l10n/de";
import { French } from "flatpickr/dist/l10n/fr";

// 7. Importar o JS do bootstrap-fileinput
import "bootstrap-fileinput/js/fileinput";
import "bootstrap-fileinput/themes/bs5/theme";

// 7.1. Importar os idiomas do bootstrap-fileinput
import "bootstrap-fileinput/js/locales/de";
import "bootstrap-fileinput/js/locales/es";
import "bootstrap-fileinput/js/locales/fr";
import "bootstrap-fileinput/js/locales/it";
import "bootstrap-fileinput/js/locales/pt";
import "bootstrap-fileinput/js/locales/ru";
import "bootstrap-fileinput/js/locales/zh";

// 8. Importar o FullCalendar
import { Calendar } from "@fullcalendar/core";
window.Calendar = Calendar;

// 8.1. Importar os idiomas do FullCalendar
import LOCALES_ALL_FULL_CALENDAR from "@fullcalendar/core/locales-all";
window.LOCALES_ALL_FULL_CALENDAR = LOCALES_ALL_FULL_CALENDAR;

// 8.2. Importar os plugins do FullCalendar
import INTERACTION_PLUGIN_FULL_CALENDAR from "@fullcalendar/interaction";
import BOOTSTRAP_PLUGIN_FULL_CALENDAR from "@fullcalendar/bootstrap5";
import MULTI_MONTH_PLUGIN_FULL_CALENDAR from "@fullcalendar/multimonth";
import TIME_GRID_PLUGIN_FULL_CALENDAR from "@fullcalendar/timegrid";
import DAY_GRID_PLUGIN_FULL_CALENDAR from "@fullcalendar/daygrid";
import LIST_PLUGIN_FULL_CALENDAR from "@fullcalendar/list";

// 8.3. Definir os plugins padrão do FullCalendar como uma variável global
window.DEFAULT_PLUGINS_FULL_CALENDAR = [
    INTERACTION_PLUGIN_FULL_CALENDAR,
    BOOTSTRAP_PLUGIN_FULL_CALENDAR,
    MULTI_MONTH_PLUGIN_FULL_CALENDAR,
    TIME_GRID_PLUGIN_FULL_CALENDAR,
    DAY_GRID_PLUGIN_FULL_CALENDAR,
    LIST_PLUGIN_FULL_CALENDAR,
];

// Configuração de multi-idiomas no bootstrap-fileinput e o flatPickr
if (document.documentElement.lang === "de") {
    $.fn.fileinput.defaults.language = "de";
    flatpickr.localize(German);
} else if (document.documentElement.lang === "en") {
    $.fn.fileinput.defaults.language = "en";
} else if (document.documentElement.lang === "es") {
    $.fn.fileinput.defaults.language = "es";
    flatpickr.localize(Spanish);
} else if (document.documentElement.lang === "fr") {
    $.fn.fileinput.defaults.language = "fr";
    flatpickr.localize(French);
} else if (document.documentElement.lang === "it") {
    $.fn.fileinput.defaults.language = "it";
    flatpickr.localize(Italian);
} else if (document.documentElement.lang === "zh-CN") {
    $.fn.fileinput.defaults.language = "zh";
    flatpickr.localize(Mandarin);
} else if (document.documentElement.lang === "ru") {
    $.fn.fileinput.defaults.language = "ru";
    flatpickr.localize(Russian);
} else {
    $.fn.fileinput.defaults.language = "pt";
    flatpickr.localize(Portuguese);
}
```

Configuração do arquivo `vite.config.js`

```js
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
// import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/css/app.css",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
        // tailwindcss(),        
    ],

    build: {
        rollupOptions: {
            output: {
                manualChunks: {
                    jquery: ["jquery"],
                    bootstrap: ["bootstrap"],
                    sweetalert2: ["sweetalert2"],
                    select2: ["select2"],
                    flatpickr: ["flatpickr"],
                    fileinput: ["bootstrap-fileinput"],
                    fullcalendar: [
                        "@fullcalendar/core",
                        "@fullcalendar/interaction",
                        "@fullcalendar/bootstrap5",
                        "@fullcalendar/multimonth",
                        "@fullcalendar/timegrid",
                        "@fullcalendar/daygrid",
                        "@fullcalendar/list",
                    ],
                },
            },
        },
    },
});
```
