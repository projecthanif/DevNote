<main>
    <header class="header w-100">
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

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                New
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/create" method="post">
                                
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>