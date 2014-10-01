@extends('layouts.master')

@section('content')

    <div class="container" style="height:800px">
        <section id="book-nav">
            <h1>
                {{ $page->magazine->title }} <small>Page {{ $page->number }}</small>
            </h1>
        </section>

        <section id="pdf" style="height:80%; width:48%; float:left; background-color:#fff">
            <p class="expand">
                Expand
            </p><iframe src="/magazines/{{ $page->magazine->id }}/{{ $page->id }}.pdf" style="width:100%; height:100%"></iframe>
        </section>

        <section id="text" style="height:80%; width:48%; float:right; background-color:#fff">
            <p class="expand">
                Expand
            </p>{{ $page->body }}</iframe>
        </section>

        <section id="page-nav" class="col-md-8 col-md-offset-2 text-center" style="clear:both; margin-top:40px;">
            <a href="" class="btn btn-primary pull-left" title="previous page">previous page</a> <a href="book.php" class="btn btn-primary" title="Back to book"> Back to book</a> <a href="" class="btn btn-primary pull-right" title="next page"> next page</a>
        </section>
    </div>

    <script>
        $('#text, #pdf').on('click', function(e){
            if($(this).data('expanded')){
                $(this).css('width','48%').css('position','relative').css('z-index', 1);
                $(this).data('expanded', false);
                $('.expand', this).html('Expand');
            }else{
                $(this).css('width','100%').css('position','fixed').css('top','0')
                .css('left', '0').css('height', '80%').css('z-index', 1000);
                $(this).data('expanded', true);
                $('.expand', this).html('Contract');
            }
        });
    </script>

@stop
