import "./bootstrap";

// Inicializar todos tooltips
document
    .querySelectorAll('[data-bs-toggle="tooltip"]')
    .forEach((t) => new bootstrap.Tooltip(t));

// Inicializar todos popovers
document
    .querySelectorAll('[data-bs-toggle="popover"]')
    .forEach((p) => new bootstrap.Popover(p));

// $(".selest2").select2({
//     width: $(this).data("width")
//         ? $(this).data("width")
//         : $(this).hasClass("w-100")
//         ? "100%"
//         : "style",
//     placeholder: $(this).data("placeholder"),
//     theme: "bootstrap-5",
//     language: "pt",
// });

// const initialTheme = html.getAttribute("data-bs-theme");
// if (initialTheme === "dark") {
//     document.body.classList.add("flatpickr-dark");
// }
