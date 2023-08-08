<main>
    <header class="header w-100">
        <div class="d-flex justify-content-between">
            <h1 class="title-header mb-3 fst-italic" id="title">
                <?= $heading ?>
            </h1>
            <!-- <button class="btn" onclick="document.body.style.backgroundColor = 'red !important'">
                <i class="fa fa-sun"></i>
            </button> -->
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
            <!-- modal botton -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                New
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="fw-bold">Create Your Todo List</h3>
                        </div>
                        <div class="modal-body p-5">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="title">Title
                                        <input type="text" name="title" id="" class="form-control" required />
                                    </label>
                                    <label for="time">Time
                                        <input type="date" name="time" id="" class="form-control" />
                                    </label>
                                    <label for="Tag">Tag
                                        <input type="text" name="tag" id="" class="form-control w-50" />
                                    </label>
                                    <div class="form-group mb-3">
                                        <label for="about">Message</label>
                                        <textarea name="about" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary" value="create" name="create">
                                        Create
                                    </button>
                                    <button type="button" class="btn btn-danger float-end" data-bs-dismiss="modal">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>