@extends('layouts.app')
@section('content')


<div class="flex flex-wrap">
    <div class="flex border border-grey-light rounded overflow-hidden shadow">
      <div class="w-full lg:w-2/3 p-4">
          <span class="block font-bold text-blue mb-3">
              {{$article->tag_id}}
          </span>
          <h3 class="">
              <?php
                  $s = $article->created_at;
                  $dt = new DateTime($s);

                  $date = $dt->format('d M Y');
              ?>
            <a href="/view/{{$article->article_id}}" class="font-serif font-bold no-underline hover:underline text-3xl text-black">
                {{$article->name}}
            </a>
          </h3>
          <span class="font-sans text-black">
              <strong>{{$article->username}}</strong> <br> {{$date}}
          </span>
          <p class="text-grey-darkest leading-normal mt-2 mb-6">
            {{$article->article}}
          </p>
        </div>
        <?php
          $images = json_decode($article->image, TRUE);
        ?>
        <div class="hidden lg:block lg:w-1/3">
          @foreach($images as $image)
              <img class="w-full" src="{{url('storage/images/'.$image)}}" alt="Card image cap">
              <br>
          @endforeach
        </div>
      </div>
  </div>
</div>

 @endsection
