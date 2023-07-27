<div class="card-custom" style="width: 18rem;">
    <img src="https://picsum.photos/200" class="card-img-top" alt="Immagine descrittiva">
    <div class="card-details">
      <h5 class="text-title">{{$article->getTitleSubstring()}}</h5>
      <p class="text-body">
        {{$article->getDescriptionSubstring()}}
      </p>
      <p class="card-text">
        {{$article->price}} €
      </p>
      <p class="card-text">
<<<<<<< HEAD
        {{$article->price}} $
=======
        Categoria: <a href="{{route('categoryShow', ['category' => $article->category])}}" class="">{{$article->category->name}}</a>
>>>>>>> 66dad10315e8534ce7a601ada2e2ac800887bcad
      </p>
      <a href="{{route('article.show' , compact('article'))}}" class="card-button">Scopri di più</a>     
      <p class="card-footer">
        Pubblicato il {{$article->created_at->format('d/m/Y')}} - Autore: {{$article->user->name}}
      </p>     
    </div>
  </div>
  