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
