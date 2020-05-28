let app = {

  init: function() {
    let actorSlides = document.querySelectorAll('.actor-link');
    for(let slide of actorSlides) {
      slide.addEventListener('click', app.handleActorSlideClick);
    }

    let movieThumbnails = document.querySelectorAll('.movie-link');
    for(let item of movieThumbnails) {
      item.addEventListener('click', app.handleMovieThumbnailClick);
    }

    let newActorInput = document.querySelector('#new-actor-picture-url');
    if(newActorInput) {
      newActorInput.addEventListener('input', app.handleNewAuthorPicture);
    }

    if(document.getElementById('actor_id')) {
      document.getElementById('actor_id').addEventListener('change', app.handleSelectActor);
    }



    let newMovieInput = document.querySelector('#new-movie-picture-url');
    if(newMovieInput) {
      newMovieInput.addEventListener('input', app.handleNewMoviePicture);
    }

  },


  handleSelectActor: function(evt) {
    const select = evt.currentTarget;
    const value = select.value;
    if(value) {
      const option = select.querySelector('option[value="' + value + '"]');
      const imageURL = option.dataset.picture;
      document.getElementById('actor-picture').innerHTML  = '<img src="' + imageURL + '"/>';
    }
    else {
      document.getElementById('actor-picture').innerHTML  = '';
    }
    
  },


  handleActorSlideClick: function(evt) {
    const slide = evt.currentTarget;
    const actorId = slide.dataset.actorId;
    document.location = 'index.php?page=actor&id=' + actorId;
  },

  handleMovieThumbnailClick: function(evt) {
    const element = evt.currentTarget;
    const movieId = element.dataset.movieId;
    document.location = 'index.php?page=movie&id=' + movieId;
  },

  handleNewAuthorPicture: function(evt) {
    const input = evt.currentTarget;
    const value = input.value;
    console.log(value);

    try {
      let image = new Image();
      image.src = value;
      image.addEventListener('load', function(evt) {
        document.getElementById('new-actor-picture').style.backgroundImage = 'url('+value+')';
      })
    } catch(error) {
        document.getElementById('new-actor-picture').style.backgroundImage = 'url(assets/images/egg.jpg)';
    }
  },

  handleNewMoviePicture: function(evt) {
    const input = evt.currentTarget;
    const value = input.value;
    console.log(value);

    try {
      let image = new Image();
      image.src = value;
      image.addEventListener('load', function(evt) {
        document.getElementById('new-movie-picture').style.backgroundImage = 'url('+value+')';
      })
    } catch(error) {
        document.getElementById('new-movie-picture').style.backgroundImage = 'url(assets/images/monk.webp)';
    }

  }


};



document.addEventListener('DOMContentLoaded', app.init);