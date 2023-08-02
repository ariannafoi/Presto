<div class="card-custom" style="width: 18rem;">
    <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400,300) : 'https://picsum.photos/400/300'}}" class="card-img-custom" alt="Immagine descrittiva">
    <div class="card-details">
      <h5 class="text-title">{{$article->getTitleSubstring()}}</h5>
      <p class="text-body">
        {{$article->getDescriptionSubstring()}}
      </p>
      <p class="card-text">
        {{$article->price}} €
      </p>
      <p class="card-text">

        {{__('ui.category')}}: <a href="{{route('categoryShow', ['category' => $article->category])}}" class="a-color">{{$article->category->name}}</a>

      </p>
      <a href="{{route('article.show' , compact('article'))}}" class="card-button">{{__('ui.findOut')}}</a>     
      <p class="card-footer">
        {{__('ui.publish')}} {{$article->created_at->format('d/m/Y')}} {{__('ui.from')}} {{$article->user->name}}
      </p>     
    </div>
  </div>
