import "./bootstrap";

// Inicializar todos tooltips
document
    .querySelectorAll('[data-bs-toggle="tooltip"]')
    .forEach((t) => new bootstrap.Tooltip(t));

// Inicializar todos popovers
document
    .querySelectorAll('[data-bs-toggle="popover"]')
    .forEach((p) => new bootstrap.Popover(p));


const html = document.documentElement;
const theme = html.getAttribute("data-bs-theme") || "light";
console.log(theme === "dark" ? "Tema escuro ativo" : "Tema claro ativo");
