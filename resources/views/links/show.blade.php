<x-app title="Mahdi Jedari | Blog">
    <x-slot name="css">
        <link type="text/css" rel="stylesheet" href="/css/post.min.css">
    </x-slot>

    <main>
        <div class="flex-wrapper">
            <div class="post__container">
                <div class="post">
                    <header class="post__header">
                        <h1 id="post__title">{{ $link->title }}</h1>
                        <time datetime="2020-06-05 00:00:00 +0000 UTC" class="post__date">{{ $link->created_at }}</time>
                    </header>

                    <article class="post__content">
                        {!! $link->description !!}
                    </article>


                    <div class="pagination">
{{--                        @if($link->previous($link->id))--}}
{{--                            <a class="pagination__item"  href="{{ route('post.show', $link->previous($link->id)->slug ?? '') }}">--}}
{{--                                <span class="pagination__label">Previous Post</span>--}}
{{--                                <span class="pagination__title">{{ $link->previous($link->id)->title ?? ''}}</span>--}}
{{--                            </a>--}}
{{--                        @endif--}}

{{--                        @if($link->next($link->id))--}}
{{--                            <a class="pagination__item" style="margin-left: auto" href="{{ route('post.show', $link->next($link->id)->slug ?? '') }}">--}}
{{--                                <span class="pagination__label">Next Post</span>--}}
{{--                                <span class="pagination__title" >{{ $link->next($link->id)->title ?? '' }}</span>--}}
{{--                            </a>--}}
{{--                        @endif--}}



                    </div>


                    <footer class="post__footer">



                        <div class="social-icons">



                            <a class="social-icons__link" rel="me" title="Twitter" href="https://twitter.com/%3cyour%20handle%3e"
                               target="_blank">
                                <div class="social-icons__icon"
                                     style="background-image: url(&#39;https://themes.gohugo.io/theme/hugo-theme-codex/svg/twitter.svg&#39;)">
                                </div>
                            </a>




                            <a class="social-icons__link" rel="me" title="GitHub" href="https://github.com/%3cyour%20handle%3e"
                               target="_blank">
                                <div class="social-icons__icon"
                                     style="background-image: url(&#39;https://themes.gohugo.io/theme/hugo-theme-codex/svg/github.svg&#39;)">
                                </div>
                            </a>


                        </div>

                        <p>Larapack © {{ now()->year }}</p>
                    </footer>
                </div>
            </div>

        </div>


    </main>
</x-app>
