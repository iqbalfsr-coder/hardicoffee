$('#movie-list').on('click', '.see-detail', function () {

    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey': '7b6f0707',
            'i': $(this).data('id')
        },
        success: function (movie) {
            if (movie.Response === "True") {

                $('.modal-body').html(`
                    <div class= "container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="` + movie.Poster + `" class="img-fluid">
                            </div>

                            <div class="col-md-8">
                            <ul class="list-group">
                                <li class="list-group-item">
                                <h3>` + movie.Title + `</h3></li> 
                                <li class="list-group-item">Released : ` + movie.Released + `</li>
                                <li class="list-group-item">Genre : ` + movie.Genre + ` </li>
                                <li class = "list-group-item" >Director : ` + movie.Director + ` </li>
                                <li class = "list-group-item" >Writer : ` + movie.Writer + ` </li>
                                <li class = "list-group-item" > Actors: ` + movie.Actors + ` </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                
                
                `)


            }
        }
    });


});