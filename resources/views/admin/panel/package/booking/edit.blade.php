<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Edit Booking Data</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('admin.links')
</head>

<body>
    @include('admin.panel.nav')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Booking Data</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <form action="{{ route('admin.booking.package.update', $booking->id ) }}" enctype="multipart/form-data" method="post"
            class="needs-validation" novalidate onkeydown="return event.key !== 'Enter';">
            @method('PUT')
            @csrf
        <div class="row">
            <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Client Profile</h5>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" value="{{$booking->name}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input name="email" type="email" class="form-control" value="{{$booking->email}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                    <input name="phone_number" type="number" class="form-control" value="{{$booking->phone_number}}">
                    </div>
                </div>
                </div>
            </div>

            </div>

            <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Package Form</h5>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Package</label>
                    <div class="col-sm-10">
                        <select name="package_id" class="form-select" aria-label="Package select">
                            <option disabled>Choose an activity</option>
                            @foreach ($packages as $package)
                                <option value="{{ $package->id }}" {{ $booking->package_id == $package->id ? 'selected' : '' }}>
                                    {{ $package->package_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                        <input name="date" type="date" class="form-control" >
                        <p>make sure to set the date</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Number of People</label>
                    <div class="col-sm-10">
                    <input name="number_of_people" type="number" class="form-control" value="{{$booking->number_of_people}}">
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
                        <p>{{$booking->image}}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                        <select name="status" class="form-select" aria-label="Default select example">
                            <option value="{{ \App\Enums\BookingStatusEnum::PENDING }}" {{ $booking->status === \App\Enums\BookingStatusEnum::PENDING ? 'selected' : '' }}>Pending</option>
                            <option value="{{ \App\Enums\BookingStatusEnum::APPROVED }}" {{ $booking->status === \App\Enums\BookingStatusEnum::APPROVED ? 'selected' : '' }}>Approved</option>
                            <option value="{{ \App\Enums\BookingStatusEnum::REJECTED }}" {{ $booking->status === \App\Enums\BookingStatusEnum::REJECTED ? 'selected' : '' }}>Rejected</option>
                            <option value="{{ \App\Enums\BookingStatusEnum::CANCELED }}" {{ $booking->status === \App\Enums\BookingStatusEnum::CANCELED ? 'selected' : '' }}>Canceled</option>
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
                                <button type="submit" class="btn btn-primary">Update</button>
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