$(() => {
    habilitaEventos();
});

const habilitaEventos = () => {
    $("#btn-copy-url").on("click", function (e) {
        e.preventDefault();

        let url_encurtada = $("#url_encurtada").val();
        console.log(url_encurtada);

        if (url_encurtada) {
            navigator.clipboard
                .writeText(url_encurtada)
                .then(() => {
                    alert("Url copiada com sucesso!");
                })
                .catch((erro) => {
                    console.log("Erro ao copiar url - ", erro);
                });
        }
    });
};
