<x-app title="Mahdi Jedari | Blog">
    <x-slot name="css">
        <link rel="stylesheet" href="css/posts.min.css">
    </x-slot>

    <main>
        <div class="post-list__container">
            <ul class="post-list">

                @foreach ($posts as $post)
                    <li class="post">
                        <div class="post__header">
                            <time class="post__date" datetime="2020-06-05 00:00:00 +0000 UTC">{{ $post->publish_date->format('Y-m-d')}}</time>
                            <h2 class="post__title">
                                <a href="{{ route('post.show', $post->slug) }}">
                                    {{ $post->title }}
                                </a>
                            </h2>
{{--                            <img src="{{ asset($post->featured_image)}}" style="width: 30%" alt="">--}}


                            <ul class="tags__list">
                                @foreach($tags as $tag)
                                    <li class="tag__item">
                                        <a class="tag__link" href="{{ $tag->slug }}">{{ $tag->name }}</a>
                                    </li>
                                @endforeach

                            </ul>


                        </div>
                    </li>
                @endforeach


            </ul>
            <ul class="tags__list">

            @foreach($tags as $tag)
                <li class="tag__item">
                    <a class="tag__link" href="{{ $tag->slug }}">{{ "$tag->name  (".$tag->posts()->count().")" }}</a>
                </li>
            @endforeach

            </ul>

        </div>


    </main>

</x-app>
