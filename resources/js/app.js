import "./bootstrap";



$(".selest2").select2({
    width: $(this).data("width")
        ? $(this).data("width")
        : $(this).hasClass("w-100")
        ? "100%"
        : "style",
    placeholder: $(this).data("placeholder"),
    theme: "bootstrap-5",
    language: "pt",
});
