<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Acrticles</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('admin.links')
</head>

<body>
    @include('admin.panel.nav')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Articles</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
          @forelse($articles as $article)
            <div class="col-lg-3">

                <div class="card">
                    <div class="card-header">{{$article->article_code}}</div>
                      <img src="{{$article->getImageUrl()}}" class="card-img-top" alt="..." style="width: 100%;  height: 15vw; object-fit: cover;">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->article_title}}</h5>
                      <div class="card-text">{!! implode(' ', array_slice(str_word_count(strip_tags($article->description), 1), 0, 10)) !!} ...</div>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-warning" href="{{route('admin.article.edit', ['article' => $article])}}">Edit</a>
                        <a class="btn btn-danger" href="{{route('admin.article.delete', ['article' => $article])}}">Delete</a>
                      </div>
                  </div>

            </div>
            @empty
            <h1>There are no data</h1>
            @endforelse
        </div>

    </section>
    <div class="sticky-add-button">
        <a href="{{ route('admin.article.create') }}" class="btn btn-secondary btn-lg">Add New Article</a>
      </div>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @include('admin.scripts')
</body>

</html>