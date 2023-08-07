<main>
    <header class="header">
        <div class="d-flex justify-content-between">
            <h1 class="title-header mb-3 fst-italic" id="title">
                <?= $heading ?>
            </h1>
            <div id="sidebar">
                <button class="btn btn-primary">
                    <div class="fa fa-bars fa-1x"></div>
                </button>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <ul class="nav nav-pills nav-justified bg-white" id="list">
                <li class="nav-item">
                    <a href="#" class="nav-link active">Todo</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Notes</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Links</a>
                </li>
            </ul>
            <div class="dropdown">
                <button type="button" class="btn" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-ellipsis"></i>
                </button>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">
                        <a href="#" class="nav-link active">All</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="#" class="nav-link">1D</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="#" class="nav-link">7D</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="#" class="nav-link">1M</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>