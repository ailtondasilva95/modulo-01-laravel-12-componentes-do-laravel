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

// 3. Importar o FlatPickr
import flatpickr from "flatpickr";
import { Portuguese } from "flatpickr/dist/l10n/pt.js";
import { Mandarin } from "flatpickr/dist/l10n/zh.js";
import { Spanish } from "flatpickr/dist/l10n/es.js";
import { Italian } from "flatpickr/dist/l10n/it.js";
import { Russian } from "flatpickr/dist/l10n/ru.js";
import { German } from "flatpickr/dist/l10n/de.js";
import { French } from "flatpickr/dist/l10n/fr.js";
flatpickr.localize(Portuguese); // Usar a tradução em português
window.flatpickr = flatpickr;

// 4. Importar o SweetAlert2
import Swal from "sweetalert2";
window.Swal = Swal;

// 5. Importar o jQuery
import jQuery from "jquery";
window.$ = jQuery;

// 5. Importar o Select2
import select2 from "select2";
select2();

// 6. Importar o JS do FilePond
import * as FilePond from "filepond";
import pt_BR from "filepond/locale/pt-br.js";
FilePond.setOptions(pt_BR);
window.FilePond = FilePond;

// 6.1.

// // 6.2.
// import FilePondPluginImageExifOrientation from "filepond-plugin-image-exif-orientation";
// window.FilePondPluginImageExifOrientation = FilePondPluginImageExifOrientation;

// 6.3.
import FilePondPluginImageValidateSize from "filepond-plugin-image-validate-size";
window.FilePondPluginImageValidateSize = FilePondPluginImageValidateSize;

// 6.4.
import FilePondPluginFileValidateSize from "filepond-plugin-file-validate-size";
window.FilePondPluginFileValidateSize = FilePondPluginFileValidateSize;

// 6.5.
import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type";
window.FilePondPluginFileValidateType = FilePondPluginFileValidateType;

// // 6.6.
// import FilePondPluginImageTransform from "filepond-plugin-image-transform";
// window.FilePondPluginImageTransform = FilePondPluginImageTransform; //

// 6.7.
import FilePondPluginFileMetadata from "filepond-plugin-file-metadata";
window.FilePondPluginFileMetadata = FilePondPluginFileMetadata;

// // 6.8.
// import FilePondPluginImagePreview from "filepond-plugin-image-preview";
// window.FilePondPluginImagePreview = FilePondPluginImagePreview; //

// // 6.9.
// import FilePondPluginImageResize from "filepond-plugin-image-resize";
// window.FilePondPluginImageResize = FilePondPluginImageResize; //

// 6.10.
import FilePondPluginFileEncode from "filepond-plugin-file-encode";
window.FilePondPluginFileEncode = FilePondPluginFileEncode;

// 6.11.
import FilePondPluginFilePoster from "filepond-plugin-file-poster";
window.FilePondPluginFilePoster = FilePondPluginFilePoster;

// 6.12.
import FilePondPluginFileRename from "filepond-plugin-file-rename";
window.FilePondPluginFileRename = FilePondPluginFileRename;

// // 6.13.
// import FilePondPluginImageCrop from "filepond-plugin-image-crop";
// window.FilePondPluginImageCrop = FilePondPluginImageCrop; //

// // 6.14.
// import FilePondPluginImageEdit from "filepond-plugin-image-edit";
// window.FilePondPluginImageEdit = FilePondPluginImageEdit; //

// // 6.15.
// import FilePondPluginImageFilter from "filepond-plugin-image-filter";
// window.FilePondPluginImageFilter = FilePondPluginImageFilter; //

// 6.16.1.
import FilePondPluginImageEditor from "@pqina/filepond-plugin-image-editor";
window.FilePondPluginImageEditor = FilePondPluginImageEditor;

// 6.16.2.
// import pintura from "@pqina/pintura";
import * as pintura from "@pqina/pintura";
window.pintura = pintura;

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
