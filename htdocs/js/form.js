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
                            $("form").html("<p class='text-center' style='font-size:1rem'>Message envoyé!<br>Merci 💕</p>");
                        } else {
                            $("form").html("<p class='text-center' style='font-size:1rem'>Il y a un problème...</p>");
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
