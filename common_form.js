$(document).ready(function() {

    $("#callback, #footer-callback").submit(function() {
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize()
        }).done(function() {
            $(this).find("input").val("");
            alert("Ваше сообщение отправлено, менеджеры свяжутся с вами в ближайшее время."); //всплывающее окно браузера
            $("#callback, #footer-callback").trigger("reset");
        });
        return false;
    });

});