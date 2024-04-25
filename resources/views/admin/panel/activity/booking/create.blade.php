<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Create New Booking</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('admin.links')
</head>

<body>
    @include('admin.panel.nav')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Create New Booking</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <form action="{{ route('admin.booking.activity.store') }}" enctype="multipart/form-data" method="post"
            class="needs-validation" novalidate onkeydown="return event.key !== 'Enter';">
         @csrf
        <div class="row">
            <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Client Profile</h5>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                    <input name="name" type="text" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input name="email" type="email" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                    <input name="phone_number" type="number" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                    <input name="address" type="text" class="form-control">
                    </div>
                </div>
                </div>
            </div>

            </div>

            <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Activity Form</h5>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Activity</label>
                    <div class="col-sm-10">
                        <select name="activity_id" class="form-select" aria-label="Activity select">
                            <option selected disabled>Choose an activity</option>
                            @foreach ($activities as $activity)
                                <option value="{{ $activity->id }}">{{ $activity->activity_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                    <input name="date" type="date" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Number of People</label>
                    <div class="col-sm-10">
                    <input name="number_of_people" type="number" class="form-control">
                    </div>
                </div>
                </div>
            </div>

            </div>

            <div class="col-lg-6">

                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Payment</h5>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                        <div class="col-sm-10">
                        <input name="image" class="form-control" type="file">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                        <select name="status" class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="{{ \App\Enums\BookingStatusEnum::PENDING }}">Pending</option>
                            <option value="{{ \App\Enums\BookingStatusEnum::APPROVED }}">Approved</option>
                            <option value="{{ \App\Enums\BookingStatusEnum::REJECTED }}">Rejected</option>
                            <option value="{{ \App\Enums\BookingStatusEnum::CANCELED }}">Canceled</option>
                        </select>
                        </div>
                    </div>
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
</body>

</html>