document.addEventListener("DOMContentLoaded", function() {
    var linksEspecialidades = document.querySelectorAll('a[href*="#especialidades"]');
    linksEspecialidades.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Impede o comportamento padrão do link
            scrollToSection('especialidades');
        });
    });

    function scrollToSection(sectionId) {
        var targetSection = document.getElementById(sectionId); // Seleciona a seção de destino
        if (targetSection) {
            var offset = 0; // Valor inicial do deslocamento
            var header = document.querySelector('header'); // Seletor do cabeçalho
            if (header) {
                offset = header.offsetHeight; // Se o cabeçalho existir, ajuste o deslocamento para a altura do cabeçalho
            }
            window.scrollTo({
                top: targetSection.offsetTop - offset,
                behavior: "smooth"
            });
        }
    }
});
