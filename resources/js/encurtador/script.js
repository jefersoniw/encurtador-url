$(() => {
    habilitaEventos();
});

const habilitaEventos = () => {
    $("#form-encurtar-url").on("submit", function (e) {
        e.preventDefault();

        let dados = $(this).serializeArray();

        encurtarUrl(dados);
    });

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

    const encurtarUrl = (dados) => {
        $.ajax({
            type: "post",
            url: route("store"),
            data: dados,
            dataType: "json",
            beforeSend: function () {
                $(".btn-button-encurtar").html(
                    "<div class='spinner-border spinner-border-sm text-light' role='status'></div>"
                );

                $(".btn-button-encurtar").attr("disabled", true);
            },
            success: function (response) {
                console.log(response);
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    // Erros de validação
                    let errors = xhr.responseJSON.errors;

                    // Exibe as mensagens de erro nos spans
                    for (let field in errors) {
                        $(`.error-${field}`).text(errors[field][0]);
                    }
                } else {
                    alert("Erro desconhecido. Tente novamente.");
                }
            },
            complete: function () {
                $(".btn-button-encurtar").html(
                    "<i class='bi bi-scissors'></i> Encurtar URL"
                );
                $(".btn-button-encurtar").attr("disabled", false);
            },
        });
    };
};
