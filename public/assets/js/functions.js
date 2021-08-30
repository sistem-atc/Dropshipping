(function ($) {
    remove = function (item) {
        var tr = $(item).closest('tr');

        tr.fadeOut(400, function () {
            tr.remove();
        });

        return false;
    }
})(jQuery);

(function ($) {
    AddTableRow = function () {

        var newRow = $("<tr>");
        var cols = "";

        cols += '<td scope="row"><input type="text" class="col-sm-10">&nbsp;</input></td>';
        cols += '<th class="col-sm-4">&nbsp;</th>';
        cols += '<td><input type="text" class="col-sm-10">&nbsp;</td>';
        cols += '<td><input type="text" class="col-sm-10">&nbsp;</td>';
        cols += '<th class="col-sm-3"></th>';
        cols += '<th><button class="btn btn-primary" type="button" onclick="remove(this)">Remover</button></th>';

        newRow.append(cols);
        $("#products-table").append(newRow);

        return false;
    };
})(jQuery);

(function ($) {
    var retorno = "";
    function getSuggestion() {
        var title = $("#title").val();
        var url = "functions.php";
        $.ajax({
            method: "POST",
            url: url,
            async: false,
            cache: false,
            data: {
                "action": "getsuggestion",
                "title": title
            },
            success: function (data) {
                if (data.indexOf("Erro") > -1) {
                    console.log(data);
                    alert("Erro: Verifique os detalhes no console do navegador em modo desenvolvedor(F12)");
                } else {
                    data = $.parseJSON(data);
                    console.log(data);
                    var path = "<nav aria-label=\"breadcrumb\">";
                    path += "<ol class=\"breadcrumb\">";
                    if (data.path_from_root.length > 0) {
                        for (var i = 0; i < data.path_from_root.length; i++)
                            path += "<li class=\"breadcrumb-item\"><a href=\"#\">" + data.path_from_root[i].name + "</a></li>";
                    }
                    path += "</ol>";
                    path += "</nav>";
                    var probclass = "bg-danger";
                    if (data.prediction_probability >= 0.3 && data.prediction_probability < 0.5)
                        probclass = "bg-warning";
                    else if (data.prediction_probability >= 0.5 && data.prediction_probability < 0.8)
                        probclass = "bg-info";
                    else if (data.prediction_probability >= 0.8)
                        probclass = "bg-success";

                    var response = '<div class="card">';
                    response += '<ul class="list-group list-group-flush">';
                    response += '<li class="list-group-item"><b>Nome: </b>' + data["name"] + '</li>';
                    response += '<li class="list-group-item"><b>ID: </b>' + data.id + '</li>';
                    response += '<li class="list-group-item"><b>Probabilidade: </b>' + data.prediction_probability;
                    response += '<div class="progress"><div class="progress-bar ' + probclass + '" role="progressbar" style="width: ' + data.prediction_probability * 100 + '%" aria-valuenow="' + data.prediction_probability + '" aria-valuemin="0" aria-valuemax="1"></div></div></li>';
                    response += '<li class="list-group-item"><b>Árvore: </b>' + path + '</li>';
                    response += '</ul>';
                    response += '</div>';

                    $("#suggestions").html(response);
                    $("#card-response").show();
                }
            },
            error: function (data) {
                alert("Erro, verifique os detalhes no console do navegador em modo desenvolvedor(F12)");
                console.log(data);
                return false;
            }
        });
    }
});