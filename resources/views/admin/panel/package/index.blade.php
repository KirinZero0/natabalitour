<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Packages</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('admin.links')
</head>

<body>
    @include('admin.panel.nav')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Packages</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
          @forelse($packages as $package)
            <div class="col-lg-3">

                <div class="card">
                    <div class="card-header">{{$package->package_code}}</div>
                      <img src="{{$package->getImageUrl()}}" class="card-img-top" alt="..." style="width: 100%;  height: 15vw; object-fit: cover;">
                    <div class="card-body">
                      <h5 class="card-title">{{$package->package_name}}</h5>
                      <div class="card-text">{!! implode(' ', array_slice(str_word_count(strip_tags($package->description), 1), 0, 10)) !!} ...</div>
                    </div>
                    <div class="card-footer">
                        {{$package->price}}
                      </div>
                    <div class="card-footer">
                        <a class="btn btn-warning" href="{{route('admin.package.edit', ['package' => $package])}}">Edit</a>
                        <a class="btn btn-danger" href="{{route('admin.package.delete', ['package' => $package])}}">Delete</a>
                      </div>
                  </div>

            </div>
            @empty
            <h1>There are no data</h1>
            @endforelse
        </div>

    </section>
    <div class="sticky-add-button">
        <a href="{{ route('admin.package.create') }}" class="btn btn-secondary btn-lg">Add New Package</a>
      </div>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @include('admin.scripts')
</body>

</html>