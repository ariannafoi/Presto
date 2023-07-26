<div class="card" style="width: 18rem;">
    <img src="https://picsum.photos/200" class="card-img-top" alt="Immagine descrittiva">
    <div class="card-body">
      <h5 class="card-title">{{$article->title}}</h5>
      <p class="card-text">
        {{$article->body}}
      </p>
      <p class="card-text">
        {{$article->price}} €
      </p>
      <a href="{{route('article.show' , compact('article'))}}" class="btn btn-primary shadow">Visualizza</a>
      <a href="#" class="btn btn-primary">Categoria: {{$article->category->name}}</a>
      <p class="card-footer">
        Pubblicato il {{$article->created_at->format('d/m/Y')}} - Autore: {{$article->user->name}}
      </p>
      
    </div>
  </div>