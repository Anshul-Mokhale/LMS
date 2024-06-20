@include('Pages.header', ['head' => 'Workspace (admin)'])


<div class="loader"></div>
<!-- SIDEBAR -->
@include('Pages.sidebar', ['side' => 'home'])
<!-- SIDEBAR -->



<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
    @include('Pages.navbar', ['side' => 'home'])
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                {{-- <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('home') }}">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="{{ route('home') }}">Home</a>

                    </li>
                </ul> --}}
            </div>
            <a href="#" class="btn-download">
                <i class='bx bxs-cloud-download'></i>
                <span class="text">Download PDF</span>
            </a>
        </div>
        <ul class="box-info row">
            <li class="col-md-3">
                {{-- <i class='bx bxs-calendar-check'></i> --}}
                <i class='bx bxs-book'></i>
                <span class="text">
                    <h3>1</h3>
                    <p>Total number of Courses</p>
                </span>
            </li>
            <li class="col-md-3">
                {{-- <i class='bx bxs-group'></i> --}}
                <i class='bx bx-task'></i>
                <span class="text">
                    <h3>20</h3>
                    <p>Total number of Classes</p>
                </span>
            </li>
            <li class="col-md-3">
                {{-- <i class='bx bxs-dollar-circle'></i> --}}
                <i class='bx bxs-notepad'></i>
                <span class="text">
                    <h3>12</h3>
                    <p>Total number of Teacher</p>
                </span>
            </li>
            <li class="col-md-3">
                {{-- <i class='bx bxs-dollar-circle'></i> --}}
                <i class='bx bxs-notepad'></i>
                <span class="text">
                    <h3>12</h3>
                    <p>Total number of Student</p>
                </span>
            </li>
        </ul>



    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->
@include('Pages.footer')
