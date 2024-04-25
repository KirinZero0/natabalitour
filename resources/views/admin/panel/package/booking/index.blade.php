<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Package Bookings</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @include('admin.links')
</head>

<body>

@include('admin.panel.nav')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Booking</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
            
                    <h5 class="card-title">Package Bookings</h5>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="search-bar d-flex align-items-center">
                            <form class="d-flex align-items-center">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="search" id="search" placeholder="Search" title="Enter search keyword" value="{{ Request::input('search') ?? '' }}">
                                    <button class="btn btn-outline-secondary" type="submit" title="Search"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        </div><!-- End Search Bar -->
                        <a  class="btn btn-secondary" href="{{ route('admin.booking.package.create') }}" title="Add"><i class="bi bi-plus"></i> Add</a>
                    </div>
            
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    <b>N</b>o
                                </th>
                                <th class="text-center">
                                    <b>N</b>ame
                                </th>
                                <th class="text-center">Phone</th>
                                <th class="text-center" data-type="date" data-format="YYYY/DD/MM">Date</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($bookings as $booking)
                            <tr>
                                <td class="text-center">{{ $loop->index + 1 }}</td>
                                <td class="text-center">{{ $booking->name }}</td>
                                <td class="text-center">{{ $booking->phone_number }}</td>
                                <td class="text-center">{{ $booking->date->format('F j, Y') }}</td>
                                <td class="text-center">
                                    <span class="{{ $booking->getStatusColor() }}">{{ $booking->status }}</span>
                                </td>
                                <td class="text-center">
                                    @if($booking->status == \App\Enums\BookingStatusEnum::PENDING)
                                        <a class="btn btn-secondary btn-sm" href="{{ route('admin.booking.package.edit', ['booking' => $booking]) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pen-fill"></i></a>
                                        <a class="btn btn-success btn-sm" href="{{ route('admin.booking.package.approve', ['booking' => $booking]) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Approve"><i class="bi bi-check-circle"></i></a>
                                        <a class="btn btn-danger btn-sm" href="{{ route('admin.booking.package.reject', ['booking' => $booking]) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Reject"><i class="bi bi-exclamation-octagon"></i></a>
                                        <a class="btn btn-warning btn-sm" href="{{ route('admin.booking.package.cancel', ['booking' => $booking]) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Cancel"><i class="bi bi-exclamation-triangle"></i></a>
                                        <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-placement="top" title="Details" data-bs-target="#verticalycentered{{ $booking->id }}"><i class="bi bi-folder"></i> Details</button>
                                        @php
                                        $phoneNumber = $booking->phone_number;
                                        // Check if the phone number starts with 0
                                        if (str_starts_with($phoneNumber, '0')) {
                                            // Replace 0 with 62
                                            $phoneNumber = substr_replace($phoneNumber, '62', 0, 1);
                                        }
                                        $url = urlencode("We are pleased to confirm your booking, Mr./Mrs. {$booking->name}, for the {$booking->package->package_name} scheduled on {$booking->date->format('d F Y')}. Your reservation has been received by Nata Bali Tours, ensuring you an unforgettable experience tailored to your preferences. We will pick you up at {$booking->address}. Thank you for choosing Nata Bali Tours.");
                                        @endphp
                                        <a class="btn btn-success btn-sm" href="https://wa.me/{{$phoneNumber}}?text={{$url}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp"><i class="bi bi-whatsapp"></i></a>
                                    @elseif($booking->status == \App\Enums\BookingStatusEnum::CANCELED || $booking->status == \App\Enums\BookingStatusEnum::REJECTED || $booking->status == \App\Enums\BookingStatusEnum::APPROVED)
                                        @php
                                        $phoneNumber = $booking->phone_number;
                                        // Check if the phone number starts with 0
                                        if (str_starts_with($phoneNumber, '0')) {
                                            // Replace 0 with 62
                                            $phoneNumber = substr_replace($phoneNumber, '62', 0, 1);
                                        }
                                        $url = urlencode("We are pleased to confirm your booking, Mr./Mrs. {$booking->name}, for the {$booking->package->package_name} scheduled on {$booking->date->format('d F Y')}. Your reservation has been received by Nata Bali Tours, ensuring you an unforgettable experience tailored to your preferences. We will pick you up at {$booking->address}.Thank you for choosing Nata Bali Tours.");
                                        @endphp
                                        <a class="btn btn-danger btn-sm" href="{{ route('admin.booking.package.delete', ['booking' => $booking->id]) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="delete"><i class="bi bi-trash-fill"></i></a>
                                        <button type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-placement="top" title="Details" data-bs-target="#verticalycentered{{ $booking->id }}"><i class="bi bi-folder"></i> Details</button>
                                        <a class="btn btn-success btn-sm" href="https://wa.me/{{$phoneNumber}}?text={{$url}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp"><i class="bi bi-whatsapp"></i></a>
                                    @endif
                                </td>
                                <div class="modal fade" id="verticalycentered{{ $booking->id }}" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Booking Details</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p><strong>Name:</strong>{{ $booking->name }}</p>
                                                        <p><strong>Package:</strong>{{ $booking->package->package_name }}</p>
                                                        <p><strong>Phone:</strong>{{ $booking->phone_number }}</p>
                                                        <p><strong>Email:</strong>{{ $booking->email }}</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p><strong>Date:</strong>{{ $booking->date->format('F j, Y') }}</p>
                                                        <p><strong>Number of People:</strong>{{ $booking->number_of_people }}</p>
                                                        <p><strong>Address:</strong>{{$booking->address}}</p>
                                                        
                                                        <a class="btn btn-secondary"  href="{{ route('admin.booking.package.image', ['booking' => $booking]) }}" target="_blank">Payment</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer d-flex">
                                                <div class="flex-grow-1">
                                                    <span class="{{ $booking->getStatusColor() }}">{{ $booking->status }}</span>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8">
                                    <p class="text-center"><em>There is no record.</em></p>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
            
                </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($bookings->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-link" aria-hidden="true">&laquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $bookings->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo;</a>
                        </li>
                    @endif
            
                    {{-- Pagination Elements --}}
                    @for ($i = 1; $i <= $bookings->lastPage(); $i++)
                        <li class="page-item {{ $bookings->currentPage() === $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ $bookings->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
            
                    {{-- Next Page Link --}}
                    @if ($bookings->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $bookings->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&raquo;</a>
                        </li>
                    @else
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span class="page-link" aria-hidden="true">&raquo;</span>
                        </li>
                    @endif
                </ul>
            </nav>

        </div>
      </div>
    </section>

  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @include('admin.scripts')
</body>

</html>