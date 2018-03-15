$(document).ready(function() {

    // Show modals
    $('.md-trigger').click(function() {
       var attr = $(this).attr("data-modal");
       $("#"+ attr).modal('show');
        $("#"+ attr).addClass("md-show");
    });

    $(".navbar-toggle.new_position").click(function() {
        $(this).parent().parent().find(".navbar-collapse").toggleClass("open-menu");
    });

    //Close modals
    $(".md-close").click(function() {
        $(".md-modal").removeClass("md-show");
        $(".md-modal").modal('hide');
    });

    // Calculator page script
    $(".calculator table tr td").find("input[type='text']").focusout(function() {
        var val = $(this).val();
        var summ = $(this).parent().parent().find(".price").text().slice(0, -5);
        var result = +summ * +val;
        $(this).parent().parent().find(".column_6").text("Итого: " + result);
    });

    $(".result-calc").click(function() {
        var arr = [];

        for( var i = 0; i <= $(".calculator table tr").length; i++ ) {
            var element = $(".calculator table tr td.column_6")[i];
            if( element != undefined ) {
                element = element.innerHTML;

                if( element != "" ) {
                    var cutElement = +element.slice(7);
                    arr[i] = cutElement;
                }
            }
        }

        var resultSumm = arr.reduce(function(sum, current) {
            return sum + current
        });

        $("#total_price").text(resultSumm);
    });

});

