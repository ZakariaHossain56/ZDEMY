@extends('layout')

@section('styles')
  <!-- Additional styles specific to this view -->
   <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"/>


@endsection

@section('content')

<input type="checkbox" id="sidebar-toggle">
<div class="sidebar">
    <div class="sidebar-header">
        <h3 class="brand">
            <span>ZDEMY</span>
        </h3>
        <label for="sidebar-toggle"><i class="fa-solid fa-bars"></i></label>
    </div>


    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="/home/dashboard">
                    <i class="fa-solid fa-house"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="/home/dashboard/orders">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>Orders</span>
                </a>
            </li>

            <li>
                <a href="/home/dashboard/students">
                    <i class="fa-solid fa-user-graduate"></i>
                    <span>Students</span>
                </a>
            </li>

            <li>
                <a href="/home/dashboard/instructors">
                    <i class="fa-solid fa-user-tie"></i>
                    <span>Instructors</span>
                </a>
            </li>

            <li>
                <a href="/home/dashboard/messages">
                    <i class="fa-solid fa-message"></i>
                    <span>Messages</span>
                </a>
            </li>

            <li>
                <a href="/home/dashboard/courses">
                    <i class="fa-solid fa-book-open"></i>
                    <span>Courses</span>
                </a>
            </li>

            <li>
                <a href="/home/dashboard/comments">
                    <i class="fa-solid fa-comment"></i>
                    <span>Comments</span>
                </a>
            </li>


        </ul>
    </div>


</div>

<div class="main-content">

    {{-- <header>
        {{-- <div class="search-wrapper">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" placeholder="search">
        </div> --}}

        {{-- <div class="social-icons">
            <div></div>
        </div> --}}
    {{--</header> --}}

    <main>
        <h2 class="dash-title">Overview</h2>
        <div class="dash-cards">
            <div class="card-single">
                <div class="card-body">
                    <i class="fa-solid fa-briefcase" style="color: white;"></i>
                    <div>
                        <h5>Account Balance</h5>
                        <h4>$30,659.45</h4>
                    </div>
                </div>

            </div>

            <div class="card-single">
                <div class="card-body">
                    <i class="fa-solid fa-rotate" style="color: white;"></i>
                    <div>
                        <h5>Pending</h5>
                        <h4>$19,500.45</h4>
                    </div>
                </div>

            </div>

            <div class="card-single">
                <div class="card-body">
                    <i class="fa-solid fa-square-check" style="color: white;"></i>
                    <div>
                        <h5>Processed</h5>
                        <h4>$20,659.45</h4>
                    </div>
                </div>

            </div>

        </div>

        <section class="recent">
            <div class="activity-grid">

                <div class="activity-card">
                    <h3>Recent Purchases</h3>

                    <table>
                        <thead>
                            <tr>
                                <th>Project</th>
                                <th>Start date</th>
                                <th>End date</th>
                                <th>Team</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>App Development</td>
                                <td>15 Aug, 2023</td>
                                <td>22 Aug, 2023</td>
                                <td>
                                    <div class="img-1"></div>
                                    <div class="img-2"></div>
                                    <div class="img-3"></div>
                                </td>
                                <td>
                                    <span class="badge success">Success</span>
                                </td>
                            </tr>


                            <tr>
                                <td>Frontend Design</td>
                                <td>15 Aug, 2023</td>
                                <td>22 Aug, 2023</td>
                                <td>
                                    <div class="img-1"></div>
                                    <div class="img-2"></div>
                                    <div class="img-3"></div>
                                </td>
                                <td>
                                    <span class="badge warning">Processing</span>
                                </td>
                            </tr>




                        </tbody>


                    </table>
                </div>


                <div class="recentcustomers">
                    <div class="cardheader">
                        <h2>Recent Customers</h2>
                    </div>
                    <table>
                        <tbody>

                            <tr class="student">
                                <td width="60px" ></td>
                                <td><h4>David<br><span>Italy</span></h4></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>



        </section>


    </main>

</div>


@endsection
