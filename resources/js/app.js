import "./bootstrap";

// 1. Importar o Alpine
import Alpine from "alpinejs";
import mask from "@alpinejs/mask";
Alpine.plugin(mask);
Alpine.start();

// 2. Importar o jQuery
import jQuery from "jquery";
window.$ = window.jQuery = jQuery;

// 3. Importar o Bootstrap
import * as bootstrap from "bootstrap";
window.bootstrap = bootstrap;

// 4. Importar o SweetAlert2
import Swal from "sweetalert2";
window.Swal = Swal;

// 5. Importar o Select2
import select2 from "select2";
select2();

// 6. Importar o JS do bootstrap-fileinput
import "bootstrap-fileinput/js/fileinput";
import "bootstrap-fileinput/themes/bs5/theme";

// 6.1. Importar os idiomas do bootstrap-fileinput
import "bootstrap-fileinput/js/locales/de";
import "bootstrap-fileinput/js/locales/es";
import "bootstrap-fileinput/js/locales/fr";
import "bootstrap-fileinput/js/locales/it";
import "bootstrap-fileinput/js/locales/pt";
import "bootstrap-fileinput/js/locales/ru";
import "bootstrap-fileinput/js/locales/zh";

// 7. Importar o Day.js
import dayjs from "dayjs";
window.dayjs = dayjs;

// 7.1. Importar os plugins do Day.js
import localizedFormat from "dayjs/plugin/localizedFormat";
import localeData from "dayjs/plugin/localeData";
dayjs.extend(localizedFormat);
dayjs.extend(localeData);

// 7.2. Importar os idiomas do Day.js
import "dayjs/locale/de";
import "dayjs/locale/es";
import "dayjs/locale/fr";
import "dayjs/locale/it";
import "dayjs/locale/pt";
import "dayjs/locale/ru";
import "dayjs/locale/zh-cn";

// 8. Importar o FlatPickr
import flatpickr from "flatpickr";
window.flatpickr = flatpickr;

// 8.2. Importar os idiomas do FlatPickr
import "flatpickr/dist/l10n/index";

// 8.2. Importar os plugins do FlatPickr
import CONFIRM_DATE_PLUGIN_FLAPICKR from "flatpickr/dist/plugins/confirmDate/confirmDate";
import WEEK_SELECT_PLUGIN_FLAPICKR from "flatpickr/dist/plugins/weekSelect/weekSelect";
import MONTH_SELECT_PLUGIN_FLAPICKR from "flatpickr/dist/plugins/monthSelect/index";
window.CONFIRM_DATE_PLUGIN_FLAPICKR = CONFIRM_DATE_PLUGIN_FLAPICKR;
window.MONTH_SELECT_PLUGIN_FLAPICKR = MONTH_SELECT_PLUGIN_FLAPICKR;
window.WEEK_SELECT_PLUGIN_FLAPICKR = WEEK_SELECT_PLUGIN_FLAPICKR;

// 9. Importar o FullCalendar
import { Calendar } from "@fullcalendar/core";
window.Calendar = Calendar;

// 9.1. Importar os idiomas do FullCalendar
import LOCALES_ALL_FULL_CALENDAR from "@fullcalendar/core/locales-all";
window.LOCALES_ALL_FULL_CALENDAR = LOCALES_ALL_FULL_CALENDAR;

// 9.2. Importar os plugins do FullCalendar
import INTERACTION_PLUGIN_FULL_CALENDAR from "@fullcalendar/interaction";
import BOOTSTRAP_PLUGIN_FULL_CALENDAR from "@fullcalendar/bootstrap5";
import MULTI_MONTH_PLUGIN_FULL_CALENDAR from "@fullcalendar/multimonth";
import TIME_GRID_PLUGIN_FULL_CALENDAR from "@fullcalendar/timegrid";
import DAY_GRID_PLUGIN_FULL_CALENDAR from "@fullcalendar/daygrid";
import LIST_PLUGIN_FULL_CALENDAR from "@fullcalendar/list";

// 9.3. Definir os plugins padrão do FullCalendar como uma variável global
window.DEFAULT_PLUGINS_FULL_CALENDAR = [
    INTERACTION_PLUGIN_FULL_CALENDAR,
    BOOTSTRAP_PLUGIN_FULL_CALENDAR,
    MULTI_MONTH_PLUGIN_FULL_CALENDAR,
    TIME_GRID_PLUGIN_FULL_CALENDAR,
    DAY_GRID_PLUGIN_FULL_CALENDAR,
    LIST_PLUGIN_FULL_CALENDAR,
];

// 10. Importar o Chart.js
import Chart from "chart.js/auto";
window.Chart = Chart;

// Configuração de multi-idiomas no bootstrap-fileinput e o flatPickr
const html_lang = document.documentElement.lang;

if (html_lang === "de") {
    $.fn.fileinput.defaults.language = "de";
    flatpickr.localize(flatpickr.l10ns.de);
    dayjs.locale("de");
} else if (html_lang === "en") {
    flatpickr.localize(flatpickr.l10ns.en);
} else if (html_lang === "es") {
    $.fn.fileinput.defaults.language = "es";
    flatpickr.localize(flatpickr.l10ns.es);
    dayjs.locale("es");
} else if (html_lang === "fr") {
    $.fn.fileinput.defaults.language = "fr";
    flatpickr.localize(flatpickr.l10ns.fr);
    dayjs.locale("fr");
} else if (html_lang === "it") {
    $.fn.fileinput.defaults.language = "it";
    flatpickr.localize(flatpickr.l10ns.it);
    dayjs.locale("it");
} else if (html_lang === "zh-CN") {
    $.fn.fileinput.defaults.language = "zh";
    flatpickr.localize(flatpickr.l10ns.zh);
    dayjs.locale("zh-cn");
} else if (html_lang === "ru") {
    $.fn.fileinput.defaults.language = "ru";
    flatpickr.localize(flatpickr.l10ns.ru);
    dayjs.locale("ru");
} else {
    $.fn.fileinput.defaults.language = "pt";
    flatpickr.localize(flatpickr.l10ns.pt);
    dayjs.locale("pt");
}
