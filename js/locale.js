let locale = navigator.language.split('-')[0];

const translations = {
    "es": {
        "home": "Inicio",
        "about": "Información",
        "services": "Servicios",
        "contact": "Contacto",
        "websites": "Sitios",
        "built": "construidos",
        "differently": "diferente",
        "locale": "es"
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
  element.innerText = translation;
}