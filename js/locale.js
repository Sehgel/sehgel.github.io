let locale = navigator.language.split('-')[0];
locale = "en";//no checkin: Remove for production

const translations = {
    "es": {
        "home": "Inicio",
        "about": "Información",
        "services": "Servicios",
        "contact": "Contacto",
        "websites": "Sitios",
        "built": "construidos",
        "differently": "diferente",
        "moto-1": "<span>Diseño</span><span style='color: var(--main-white);'>con</span><span>destreza<span style='color: var(--main-white);'>.</span></span>",

        "moto-2": "<span>Calidad</span><span style='color: var(--main-white); text-align: right;'>cuidadosamente</span><span><span style='color: var(--main-white);'>.</span>elaborada</span>",

        "moto-3": "<span>Servicio</span><span style='color: var(--main-white);'>amable</span><span>bien</span><span style='color: var(--main-white);'>hecho<span style='color: var(--main-black);'>.</span></span>",
    },
};


// When the page content is ready...
document.addEventListener("DOMContentLoaded", () => {
    if (locale in translations == false)
        return;
  document
    // Find all elements that have the key attribute
    .querySelectorAll("[data-i18n-key]")
    .forEach(translateElement);
});

function translateElement(element) {
  const key = element.getAttribute("data-i18n-key");
  if (key in translations[locale] == false)
    return;
  const translation = translations[locale][key];
  element.innerHTML = translation;
}