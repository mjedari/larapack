<x-app title="Mahdi Jedari | Links">
    <x-slot name="css">
        <link rel="stylesheet" href="/css/posts.min.css">
    </x-slot>

    <main>
        <div class="post-list__container">
            <ul class="post-list">

                @foreach ($links as $link)
                    <li class="post">
                        <div class="post__header">
                            <time class="post__date" datetime="2020-06-05 00:00:00 +0000 UTC">{{ $link->created_at->format('Y-m-d') }}</time>
                            <h2 class="post__title">
                                <a href="{{ route('link.show', $link->id) }}">
                                    {{ $link->title }}
                                </a>

                            </h2>
                            <span>{{ $link->url }}</span>
                            {{--                            <img src="{{ asset($link->featured_image)}}" style="width: 30%" alt="">--}}


                        </div>
                    </li>
                @endforeach


            </ul>
            <ul class="tags__list">

                <li class="tag__item">
                    <a class="tag__link" href=""></a>
                </li>

            </ul>

        </div>


    </main>

</x-app>
