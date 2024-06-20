<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bx-code-alt'></i>
        <span class="text">Workspace</span>
    </a>
    <ul class="side-menu top">
        <li class="{{ $side === 'home' ? 'active' : '' }}">
            <a href="{{ route('home') }}">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="{{ $side === 'course' ? 'active' : '' }}">
            <a href="{{ route('courses') }}">
                <i class='bx bxs-book'></i>
                <span class="text">Course</span>
            </a>
        </li>


    </ul>
</section>
