import "./bootstrap";

// 1. Inicializar todos tooltips
document
    .querySelectorAll('[data-bs-toggle="tooltip"]')
    .forEach((t) => new bootstrap.Tooltip(t));

// 2. Inicializar todos popovers
document
    .querySelectorAll('[data-bs-toggle="popover"]')
    .forEach((p) => new bootstrap.Popover(p));

const theme = document.documentElement.getAttribute("data-bs-theme") || "light";
console.log(theme === "dark" ? "Tema escuro ativo" : "Tema claro ativo");
