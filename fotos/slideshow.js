document.addEventListener("DOMContentLoaded", function() {
    let imagens = document.querySelectorAll('.imagem-slideshow');
    let index = 0;

    function mostrarImagem() {
        for (let i = 0; i < imagens.length; i++) {
            imagens[i].classList.remove('ativa');
        }
        imagens[index].classList.add('ativa');
        index = (index + 1) % imagens.length; // Passa para a próxima imagem
    }

    // Define o intervalo para trocar as imagens (5000 milissegundos = 5 segundos)
    setInterval(mostrarImagem, 5000);
});
