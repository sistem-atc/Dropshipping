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

        cols += '<td scope="row">&nbsp;</td>';
        cols += '<th>&nbsp;</th>';
        cols += '<td>&nbsp;</td>';
        cols += '<td>&nbsp;</td>';
        cols += '<th>&nbsp;</th>';
        cols += '<th><button class="btn btn-primary" type="button" onclick="remove(this)">Remover</button></th>';

        newRow.append(cols);
        $("#products-table").append(newRow);

        return false;
    };
})(jQuery);

$(function () {
    $("td").dblclick(function () {
        var conteudoOriginal = $(this).text();

        $(this).addClass("celulaEmEdicao");
        $(this).html("<input type='text' value='" + conteudoOriginal + "' />");
        $(this).children().first().focus();

        $(this).children().first().keypress(function (e) {
            if (e.which == 13) {
                var novoConteudo = $(this).val();
                $(this).parent().text(novoConteudo);
                $(this).parent().removeClass("celulaEmEdicao");
            }
        });

        $(this).children().first().blur(function () {
            $(this).parent().text(conteudoOriginal);
            $(this).parent().removeClass("celulaEmEdicao");
        });
    });
});