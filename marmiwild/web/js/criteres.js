$( document ).ready(function() {

    $('.filtre').on('click', function (e) {
        e.preventDefault();

        $activeCat = $(this).parent().siblings('.active');
        $activeCat.removeClass('active');
        $(this).parent().addClass('active');

        var critere = this.dataset.critere;
        var loader = startLoader($('body'));

        $.ajax({
            url: "/recette/filtre/" + critere,
            method: 'POST',
            dataType: 'json',
            success: function (response) {
                var recettes = JSON.parse(response.data);
                var html = '';
                stopLoader(loader);
                for (recette of recettes) {
                    var difficulteHtml = '';
                    var coutHtml = '';
                    for (j=0; j<recette.difficulte; j++) {
                        difficulteHtml += '<i class="fa fa-star fa-2x" aria-hidden="true" style="color: #A46A1F"></i>';
                    }
                    for (j=0; j<recette.cout; j++) {
                        coutHtml += '<i class="fa fa-euro fa-2x" aria-hidden="true" style="color: #030323"></i>';
                    }
                    html += '<div class="col-sm-6 col-md-4">' +
                        '<div class="thumbnail">' +
                        '<img src="/uploads/'+
                        recette.image+
                        '" alt="...">' +
                        '<div class="caption"><a href="/recette/show/' +
                        recette.id+
                        '"><h3 class="text-center">'+recette.nom+'</h3></a><div class="row" style="margin: 20px 0">' +
                        '<div class="col-sm-6"><p class="text-center">'+
                        difficulteHtml +
                        '</p></div>' +
                        '<div class="col-sm-6"><p class="text-center">' +
                        coutHtml +
                        '</div></div>' +
                        '<p class="text-right">' +
                        '<a href="/recette/edit/'+recette.id+'" class="btn btn-primary" role="button">Modifier</a>' +
                        '<a href="/recette/delete/'+recette.id+'" class="btn btn-danger" role="button">Supprimer</a></p></div></div></div>'
                }
                $('#grille-recette').html(html);
            }
        })
    });

    $('#search-form').on('submit', function (e) {
        e.preventDefault();
        var keyword = this.elements[0].value;

        if (keyword !== '') {
            var loader = startLoader($('body'));
            $.ajax({
                url: "/recette/search/" + keyword,
                method: 'POST',
                dataType: 'json',
                success: function (response) {
                    var recettes = JSON.parse(response.data);
                    var html = '';
                    stopLoader(loader);
                    for (recette of recettes) {
                        var difficulteHtml = '';
                        var coutHtml = '';
                        for (j = 0; j < recette.difficulte; j++) {
                            difficulteHtml += '<i class="fa fa-star fa-2x" aria-hidden="true" style="color: #A46A1F"></i>';
                        }
                        for (j = 0; j < recette.cout; j++) {
                            coutHtml += '<i class="fa fa-euro fa-2x" aria-hidden="true" style="color: #030323"></i>';
                        }
                        html += '<div class="col-sm-6 col-md-4">' +
                            '<div class="thumbnail">' +
                            '<img src="/uploads/' +
                            recette.image +
                            '" alt="...">' +
                            '<div class="caption"><a href="/recette/show/' +
                            recette.id +
                            '"><h3 class="text-center">' + recette.nom + '</h3></a><div class="row" style="margin: 20px 0">' +
                            '<div class="col-sm-6"><p class="text-center">' +
                            difficulteHtml +
                            '</p></div>' +
                            '<div class="col-sm-6"><p class="text-center">' +
                            coutHtml +
                            '</div></div>' +
                            '<p class="text-right">' +
                            '<a href="/recette/edit/' + recette.id + '" class="btn btn-primary" role="button">Modifier</a>' +
                            '<a href="/recette/delete/' + recette.id + '" class="btn btn-danger" role="button">Supprimer</a></p></div></div></div>'
                    }
                    $('#grille-recette').html(html);
                }
            })
        }
    });
});
