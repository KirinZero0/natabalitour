<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Edit Activity</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('admin.links')
</head>

<body>
    @include('admin.panel.nav')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Activity</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <form action="{{ route('admin.activity.update', $activity->id) }}" enctype="multipart/form-data" method="post"
            class="needs-validation" novalidate onkeydown="return event.key !== 'Enter';">
            @method('PUT')
         @csrf
        <div class="row">
            <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Activity Profile</h5>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Activity Code</label>
                        <div class="col-sm-10">
                        <input name="activity_code" type="text" class="form-control" value="{{$activity->activity_code}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Activity Name</label>
                        <div class="col-sm-10">
                        <input name="activity_name" type="text" class="form-control" value="{{$activity->activity_name}}">
                        </div>
                    </div>
                </div>
            </div>

            </div>

            <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Price and Image</h5>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                    <input name="price" type="number" class="form-control" value="{{$activity->price}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                    <input name="image" class="form-control" type="file">
                    <p>{{$activity->image}}</p>
                    </div>
                </div>
                </div>
            </div>

            </div>

            <div class="col-lg-6">

                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Descriptions</h5>
                    <div id="editor">
                        {!! $activity->description !!}
                      </div>
                      <input type="hidden" id="editorContent" name="description">
                </div>
                </div>
    
            </div>

            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Make sure all the datas are valid</h5>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </form>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @include('admin.scripts')
    <script>
        // Initialize Quill editor
        var quill = new Quill('#editor', {
        theme: 'snow'
        });

        // Listen for form submission
        document.querySelector('form').addEventListener('submit', function(event) {
        // Get Quill editor's HTML content
        var htmlContent = quill.root.innerHTML;

        // Update the hidden input field with the HTML content
        document.getElementById('editorContent').value = htmlContent;
        });
    </script>
</body>

</html>