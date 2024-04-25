<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admins</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @include('admin.links')
</head>

<body>

@include('admin.panel.nav')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Admins</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
            
                    <h5 class="card-title">Admin Manager</h5>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="search-bar d-flex align-items-center">
                            <form class="d-flex align-items-center">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="search" id="search" placeholder="Search" title="Enter search keyword" value="{{ Request::input('search') ?? '' }}">
                                    <button class="btn btn-outline-secondary" title="search"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        </div><!-- End Search Bar -->
                        <a href="{{ route('admin.user.create') }}" class="btn btn-secondary" title="Add"><i class="bi bi-plus"></i> Add</a>
                    </div>
            
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    <b>N</b>o
                                </th>
                                <th class="text-center">
                                    <b>U</b>sername
                                </th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($admins as $admin)
                            <tr>
                                <td class="text-center">{{ $loop->index + 1 }}</td>
                                <td class="text-center">{{ $admin->username }}</td>
                                <td class="text-center">
                                    <a class="btn btn-secondary btn-sm" href="{{ route('admin.user.edit', ['admin' => $admin->id]) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pen-fill"></i></a>
                                    <a class="btn btn-danger btn-sm" href="{{ route('admin.user.delete', ['admin' => $admin->id]) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="delete"><i class="bi bi-trash-fill"></i></a>
                                </td>
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
                    @if ($admins->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-link" aria-hidden="true">&laquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $admins->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo;</a>
                        </li>
                    @endif
            
                    {{-- Pagination Elements --}}
                    @for ($i = 1; $i <= $admins->lastPage(); $i++)
                        <li class="page-item {{ $admins->currentPage() === $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ $admins->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
            
                    {{-- Next Page Link --}}
                    @if ($admins->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $admins->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&raquo;</a>
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