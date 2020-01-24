$(document).ready(() => {

    $("form button").click((e) => {

        e.preventDefault();

        let nom = $("form #nom").val();
        let mail = $("form #email").val();
        let message = $("form #message").val();

        if (nom.length > 1 && mail.length > 1 && message.length > 10) {
            $.post(
                "form.php",
                {
                    nom : nom,
                    mail : mail,
                    message : message
                },
                (data) => {
                    $("form").html(() => {
                        if (data == 1) {
                            $("form").html("Message envoyé!");
                        } else {
                            $("form").html("Il y a un problème...");
                        }
                    })
                }
            )
        }
        else {
            console.log("Il faut plus de caractères!");
        }
        
    })
})
