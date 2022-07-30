@extends('layouts.admin.app')

@section('dashboard')

    <div class="container-scroller">


        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title"> Basic Tables </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Basic Table</h4>
                                <p class="card-description"> Add class <code>.table</code>
                                </p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Profile</th>
                                                <th>VatNo.</th>
                                                <th>Created</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jacob</td>
                                                <td>53275531</td>
                                                <td>12 May 2017</td>
                                                <td><label class="badge badge-danger">Pending</label></td>
                                            </tr>
                                            <tr>
                                                <td>Messsy</td>
                                                <td>53275532</td>
                                                <td>15 May 2017</td>
                                                <td><label class="badge badge-warning">In progress</label></td>
                                            </tr>
                                            <tr>
                                                <td>John</td>
                                                <td>53275533</td>
                                                <td>14 May 2017</td>
                                                <td><label class="badge badge-info">Fixed</label></td>
                                            </tr>
                                            <tr>
                                                <td>Peter</td>
                                                <td>53275534</td>
                                                <td>16 May 2017</td>
                                                <td><label class="badge badge-success">Completed</label></td>
                                            </tr>
                                            <tr>
                                                <td>Dave</td>
                                                <td>53275535</td>
                                                <td>20 May 2017</td>
                                                <td><label class="badge badge-warning">In progress</label></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">(Confirm / Cancel) Orders</h4>
                                {{-- <p class="card-description">  <code>.table-hover</code> --}}
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Product</th>
                                                <th>Sale</th>
                                                <th>Quantity</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (isset($orders) && $orders->count() > 0)
                                                @foreach ($orders as $order)
                                                    <tr>

                                                        <td>{{ $order->user->name }}</td>
                                                        <td>{{ $order->meal_name }}</td>
                                                        <td class="text-danger"> {{ $order->meal_price }}$
                                                            {{-- <i class="mdi mdi-arrow-down"></i> --}}
                                                        </td>
                                                        <td>{{ $order->qty }}</td>

                                                        @if ($order->status === 'ordered')
                                                            <td>
                                                                <form method="post" action="{{ route('confirm/order',$order->id) }}">
                                                                    @csrf

                                                                    <button type="submit"
                                                                        class="btn btn-success">confirm</button>
                                                                </form>

                                                            </td>
                                                        @else
                                                            <td>
                                                                <form method="post" action="{{ route('cancel/order',$order->id) }}">
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="btn btn-danger">cancel</button>
                                                                </form>


                                                            </td>
                                                        @endif


                                                    </tr>
                                                @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Users Tables</h4>
                                {{-- <p class="card-description"> Add class <code>.table-striped</code> --}}
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> User </th>
                                                <th> First name </th>
                                                <th> Progress </th>
                                                <th> Email </th>
                                                <th> type</th>
                                                <th> Created at </th>
                                                <th> Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td class="py-1">
                                                        @if (!$user->profile)
                                                            <img src="{{ URL::asset('images/dashboard/faces-clipart/pic-1.png') }}"
                                                                alt="image" />
                                                        @else
                                                            <img src="{{ URL::asset('images/users/' . $user->profile->image) }}"
                                                                alt="image" />
                                                        @endif
                                                    </td>
                                                    <td> {{ $user->name }} </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    {{-- <td> $ 77.99 </td> --}}
                                                    <td>{{ $user->email }}</td>
                                                    @if ($user->is_admin == 1)
                                                        <td>Admin</td>
                                                    @else
                                                        <td>User</td>
                                                    @endif

                                                    <td> {{ $user->created_at }} </td>
                                                    @if ($user->is_admin === 0)
                                                        <td>
                                                            <form method="get"
                                                                action="{{ route('delete/user', $user->id) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                            {!! $users->links('pagination::bootstrap-4') !!}

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bordered table</h4>
                                <p class="card-description"> Add class <code>.table-bordered</code>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th> # </th>
                                                <th> First name </th>
                                                <th> Progress </th>
                                                <th> Amount </th>
                                                <th> Deadline </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 1 </td>
                                                <td> Herman Beck </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td> $ 77.99 </td>
                                                <td> May 15, 2015 </td>
                                            </tr>
                                            <tr>
                                                <td> 2 </td>
                                                <td> Messsy Adam </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td> $245.30 </td>
                                                <td> July 1, 2015 </td>
                                            </tr>
                                            <tr>
                                                <td> 3 </td>
                                                <td> John Richards </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td> $138.00 </td>
                                                <td> Apr 12, 2015 </td>
                                            </tr>
                                            <tr>
                                                <td> 4 </td>
                                                <td> Peter Meggik </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td> $ 77.99 </td>
                                                <td> May 15, 2015 </td>
                                            </tr>
                                            <tr>
                                                <td> 5 </td>
                                                <td> Edward </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td> $ 160.25 </td>
                                                <td> May 03, 2015 </td>
                                            </tr>
                                            <tr>
                                                <td> 6 </td>
                                                <td> John Doe </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td> $ 123.21 </td>
                                                <td> April 05, 2015 </td>
                                            </tr>
                                            <tr>
                                                <td> 7 </td>
                                                <td> Henry Tom </td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td> $ 150.00 </td>
                                                <td> June 16, 2015 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Inverse table</h4>
                                <p class="card-description"> Add class <code>.table-dark</code>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th> # </th>
                                                <th> First name </th>
                                                <th> Amount </th>
                                                <th> Deadline </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 1 </td>
                                                <td> Herman Beck </td>
                                                <td> $ 77.99 </td>
                                                <td> May 15, 2015 </td>
                                            </tr>
                                            <tr>
                                                <td> 2 </td>
                                                <td> Messsy Adam </td>
                                                <td> $245.30 </td>
                                                <td> July 1, 2015 </td>
                                            </tr>
                                            <tr>
                                                <td> 3 </td>
                                                <td> John Richards </td>
                                                <td> $138.00 </td>
                                                <td> Apr 12, 2015 </td>
                                            </tr>
                                            <tr>
                                                <td> 4 </td>
                                                <td> Peter Meggik </td>
                                                <td> $ 77.99 </td>
                                                <td> May 15, 2015 </td>
                                            </tr>
                                            <tr>
                                                <td> 5 </td>
                                                <td> Edward </td>
                                                <td> $ 160.25 </td>
                                                <td> May 03, 2015 </td>
                                            </tr>
                                            <tr>
                                                <td> 6 </td>
                                                <td> John Doe </td>
                                                <td> $ 123.21 </td>
                                                <td> April 05, 2015 </td>
                                            </tr>
                                            <tr>
                                                <td> 7 </td>
                                                <td> Henry Tom </td>
                                                <td> $ 150.00 </td>
                                                <td> June 16, 2015 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Table with contextual classes</h4>
                                <p class="card-description"> Add class <code>.table-{color}</code>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-contextual">
                                        <thead>
                                            <tr>
                                                <th> # </th>
                                                <th> First name </th>
                                                <th> Product </th>
                                                <th> Amount </th>
                                                <th> Deadline </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-info">
                                                <td> 1 </td>
                                                <td> Herman Beck </td>
                                                <td> Photoshop </td>
                                                <td> $ 77.99 </td>
                                                <td> May 15, 2015 </td>
                                            </tr>
                                            <tr class="table-warning">
                                                <td> 2 </td>
                                                <td> Messsy Adam </td>
                                                <td> Flash </td>
                                                <td> $245.30 </td>
                                                <td> July 1, 2015 </td>
                                            </tr>
                                            <tr class="table-danger">
                                                <td> 3 </td>
                                                <td> John Richards </td>
                                                <td> Premeire </td>
                                                <td> $138.00 </td>
                                                <td> Apr 12, 2015 </td>
                                            </tr>
                                            <tr class="table-success">
                                                <td> 4 </td>
                                                <td> Peter Meggik </td>
                                                <td> After effects </td>
                                                <td> $ 77.99 </td>
                                                <td> May 15, 2015 </td>
                                            </tr>
                                            <tr class="table-primary">
                                                <td> 5 </td>
                                                <td> Edward </td>
                                                <td> Illustrator </td>
                                                <td> $ 160.25 </td>
                                                <td> May 03, 2015 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                        bootstrapdash.com 2020</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                            href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin
                            templates</a> from Bootstrapdash.com</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>





    <script src="{{ URL::asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ URL::asset('js/dashboard/off-canvas.js') }}"></script>
    <script src="{{ URL::asset('js/dashboard/hoverable-collapse.js') }}"></script>
    <script src="{{ URL::asset('js/dashboard/misc.js') }}"></script>
    <script src="{{ URL::asset('js/dashboard/settings.js') }}"></script>
    <script src="{{ URL::asset('js/dashboard/todolist.js') }}"></script>


@endsection
