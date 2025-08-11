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
import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

// 5. Importar o Select2
import select2 from "select2";
select2();

// 6. Importar o FlatPickr
import flatpickr from "flatpickr";
window.flatpickr = flatpickr;

// 6.1. Importar os plugins do FlatPickr
import confirmDatePlugin from "flatpickr/dist/plugins/confirmDate/confirmDate.js";
import weekSelectPlugin from "flatpickr/dist/plugins/weekSelect/weekSelect.js";
import monthSelectPlugin from "flatpickr/dist/plugins/monthSelect/index.js";
window.confirmDatePlugin = confirmDatePlugin;
window.monthSelectPlugin = monthSelectPlugin;
window.weekSelectPlugin = weekSelectPlugin;

// 6.2. Importar os idiomas do FlatPickr
import { Portuguese } from "flatpickr/dist/l10n/pt.js";
import { Mandarin } from "flatpickr/dist/l10n/zh.js";
import { Spanish } from "flatpickr/dist/l10n/es.js";
import { Italian } from "flatpickr/dist/l10n/it.js";
import { Russian } from "flatpickr/dist/l10n/ru.js";
import { German } from "flatpickr/dist/l10n/de.js";
import { French } from "flatpickr/dist/l10n/fr.js";

// 7. Importar o JS do bootstrap-fileinput
import "bootstrap-fileinput/js/plugins/sortable.min.js";
import "bootstrap-fileinput/js/fileinput.min.js";
import "bootstrap-fileinput/themes/bs5/theme.min.js";

// 7.1. Importar os idiomas do bootstrap-fileinput
import "bootstrap-fileinput/js/locales/de.js";
import "bootstrap-fileinput/js/locales/es.js";
import "bootstrap-fileinput/js/locales/fr.js";
import "bootstrap-fileinput/js/locales/it.js";
import "bootstrap-fileinput/js/locales/pt.js";
import "bootstrap-fileinput/js/locales/ru.js";
import "bootstrap-fileinput/js/locales/zh.js";

// Configuração de multi-idiomas no bootstrap-fileinput e o flatPickr
if (document.documentElement.getAttribute("lang") === "de") {
    $.fn.fileinput.defaults.language = "de";
    flatpickr.localize(German);
} else if (document.documentElement.getAttribute("lang") === "en") {
    $.fn.fileinput.defaults.language = "en";
} else if (document.documentElement.getAttribute("lang") === "es") {
    $.fn.fileinput.defaults.language = "es";
    flatpickr.localize(Spanish);
} else if (document.documentElement.getAttribute("lang") === "fr") {
    $.fn.fileinput.defaults.language = "fr";
    flatpickr.localize(French);
} else if (document.documentElement.getAttribute("lang") === "it") {
    $.fn.fileinput.defaults.language = "it";
    flatpickr.localize(Italian);
} else if (document.documentElement.getAttribute("lang") === "zh-CN") {
    $.fn.fileinput.defaults.language = "zh";
    flatpickr.localize(Mandarin);
} else if (document.documentElement.getAttribute("lang") === "ru") {
    $.fn.fileinput.defaults.language = "ru";
    flatpickr.localize(Russian);
} else {
    $.fn.fileinput.defaults.language = "pt";
    flatpickr.localize(Portuguese);
}

// // 4. Importar o FullCalendar
// import { Calendar } from "@fullcalendar/core";
// window.Calendar = Calendar;

// // 4.1. Importar o plugin interaction do FullCalendar
// import interactionPlugin from "@fullcalendar/interaction";
// window.interactionPlugin = interactionPlugin;

// // 4.2. Importar o plugin multimonth do FullCalendar
// import multiMonthPlugin from "@fullcalendar/multimonth";
// window.multiMonthPlugin = multiMonthPlugin;

// // 4.3. Importar o plugin timegrid do FullCalendar
// import timeGridPlugin from "@fullcalendar/timegrid";
// window.timeGridPlugin = timeGridPlugin;

// // 4.4. Importar o plugin daygrid do FullCalendar
// import dayGridPlugin from "@fullcalendar/daygrid";
// window.dayGridPlugin = dayGridPlugin;

// // 4.5. Importar o plugin list do FullCalendar
// import listPlugin from "@fullcalendar/list";
// window.listPlugin = listPlugin;
