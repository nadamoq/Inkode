<x-mail ::message>
<div>
  @foreach ($collection as $item)
      <article>
        <h3>
           {{ $post->title}}
        </h3>
        <p>{{$post->excerpt}}</p>
        <p><a href="">Read More</a></p>
      </article>
  @endforeach
</div>
</x-mail>
