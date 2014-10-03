@extends('layouts.master')

@section('content')

    <div class="container" style="height:800px">
        <section id="book-nav">
            <h1>
                {{ $page->magazine->title }}
                <small>
                    Page {{ $page->number }}
                    <a href="{{ route('magazine.show', $page->magazine->id) }}" class="" title="Back to book"> Back to {{ $page->magazine->  title }}</a>
                </small>
            </h1>
        </section>

        <section id="pdf" style="height:80%; width:48%; float:left; background-color:#fff">
            <p class="expand btn btn-info btn-block">
                Expand
            </p>
            <iframe src="/magazines/{{ $page->magazine->id }}/{{ $page->id }}.pdf" style="width:100%; height:100%"></iframe>
            @if($page->prev)
                <a href="{{ route('page.show', $page->prev->id) }}" class="btn btn-primary btn-block pull-left" title="previous page">previous page</a>
            @endif
        </section>

        <section id="text" style="height:80%; width:48%; float:right; background-color:#fff">
            <p class="expand btn btn-info btn-block">
                Expand
            </p>
            <div style="width:100%; height:100%; overflow:scroll">
                <p>{{ nl2br($page->body) }}</p>
            </div>
            @if($page->next)
                <a href="{{ route('page.show', $page->next->id) }}" class="btn btn-primary btn-block pull-right" title="next page"> next page</a>
            @endif
        </section>

        <section id="page-nav" class="col-md-8 col-md-offset-2 text-center" style="clear:both; margin-top:40px;">
        </section>
    </div>

    <script>
        $('#text .expand, #pdf .expand').on('click', function(e){
            var frame = $(this).parents('section');
            if(frame.data('expanded')){
                frame.css('width','48%').css('position','relative').css('z-index', 1);
                frame.data('expanded', false);
                $('.expand', frame).html('Expand');
            }else{
                frame.css('width','100%').css('position','fixed').css('top','0')
                .css('left', '0').css('height', '80%').css('z-index', 1000);
                frame.data('expanded', true);
                $('.expand', frame).html('Contract');
            }
        });
    </script>

@stop
