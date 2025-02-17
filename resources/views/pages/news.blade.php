@extends('layouts.main_layout')

@section('title', 'ЦК Електронних апаратів  - Новини')

@section('content')

<link href="css/pages.css" rel="stylesheet">

<div class="row d-flex m-0 p-0 title-news">
    <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
    <div class="col-12 col-md-10 col-lg-8 text-center py-3 py-md-5 px-5 px-md-0">
        <div class="col-12 py-1 py-md-3 px-md-4 news-title-inside-cont text-left d-block d-lg-flex">
            <div class="col-12 col-lg-3 p-0 text-center text-md-left" style="margin: auto;">
                <span>Новини</span>
            </div>
            <div class="col-12 col-lg-9 p-0">
                <div class="col-12 p-0">
                    <div class="slider-news">

                        @foreach ($news as $item)
                            <div>
                                <a href="" data-toggle='modal' data-target='#exampleModal{{ $item->id }}'>
                                    <img src="{{ $item->img }}">
                                </a>
                                {{ $item->title }}
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row d-flex m-0 py-3 content-background-news">
    <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
    <div class="col-12 col-md-10 col-lg-8 py-3 py-md-2 px-5 px-md-0">

        @foreach ($news as $item)

            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{  $item->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel{{ $item->id }}"><?php echo $item->title; ?></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <?php echo $item->text ?>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
                    </div>
                  </div>
                </div>
            </div>

        @endforeach


        @foreach ($news as $item)

            <div class="col-12 py-3 m-0 d-block news-container">
                <div class="col-12 text-center p-0 m-0 pb-2 news-header-text">
                    <span>{{ $item->title }}</span>
                </div>
                <div class="col-12 d-block d-md-flex news-content-container">
                    <div class="col-12 col-md-5 p-2 m-0">
                        <img class="w-100" src="{{ $item->img }}">
                    </div>
                    <div class="col-12 col-md-7 p-2 m-0 d-block">
                        <div class="col-12 m-0 p-3 news-text">
                            <span>

                                <?php
                                    $short_text = substr($item->text, 0, 300);
                                    $short_text = str_replace("[", "<", $short_text);
                                    $short_text = str_replace("]", ">", $short_text);
                                    $short_text = strip_tags($short_text);
                                    $short_text = rtrim($short_text, "!,.-");
                                    $short_text = substr($short_text, 0, strrpos($short_text, ' '))."...";
                                    $short_text = nl2br($short_text);

                                    $doc = new DOMDocument();
                                    $doc->loadHTML('<?xml encoding="utf-8" >' . $short_text . "<p><a href='' data-toggle='modal' data-target='#exampleModal" . $item->id . "' style='color:#285953; font-weight: 600; background: linear-gradient(181.18deg, #FFFFFF 1.01%, #C4C4C4 311.29%); border-radius: 20px; padding: 0.5em;'>  Читати далі >></a>" );

                                    echo $doc->saveHTML();
                                ?>

                            </span>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

        <div class="col-12 p-0 m-0">
            {{ $news->render() }}
        </div>

    </div>

    <div class="col-md-1 col-lg-2 d-none d-md-flex p-0 m-0"></div>
</div>

@endsection