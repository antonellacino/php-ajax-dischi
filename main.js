$(document).ready(function() {
    var source = document.getElementById("album-template").innerHTML;
    var template = Handlebars.compile(source);

    $.ajax({
        method: "GET",
        url: "db.php",
        success: function(data, stato) {
            var album = data;
            for (i = 0; i < album.length; i++) {
                var context = {
                    cover: album[i].poster,
                    title: album[i].title,
                    author: album[i].author,
                    year: album[i].year,
                }
                var html = template(context);
                console.log(context);

                $('div.container').append(html);
            }
        },
        error: function(richiesta, stato, errori) {
            alert("E' avvenuto un errrore." + errori);
        }
    });

});
