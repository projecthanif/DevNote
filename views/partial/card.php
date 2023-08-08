<!-- CARD -->
<div class="container p-3">
    <div class="row mt-3">
        <?php foreach ($select as $list): 
            $tag = $list['tag'];
            $title = $list['title'];
            $about = $list['about'];
        ?>
            
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div id="card">
                    <div class="d-flex justify-content-between">
                        <h5 class="fs-6">Just Now</h5>
                        <h5 class="badge rounded-pill bg-info fs-6">
                            <?= $tag ?>
                        </h5>
                    </div>
                    <h3 class="fs-3 mt-2">
                        <?= $title ?>
                    </h3>
                    <div class="mt-1" id="card-body">
                        <?= $about ?>
                    </div>
                    <div class="card-footer">
                        <!-- modal botton -->
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#update">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="update" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="fw-bold">Create Your Todo List</h3>
                                    </div>
                                    <div class="modal-body p-5">
                                        <form action="#" method="post">
                                            <div class="form-group">
                                                <label for="title">Title
                                                    <input type="text" name="title" id="" class="form-control" required
                                                        placeholder="<?= $title ?>" />
                                                </label>
                                                <label for="time">Time
                                                    <input type="date" name="time" id="" class="form-control" />
                                                </label>
                                                <label for="Tag">Tag
                                                    <input type="text" name="Tag" id="" class="form-control w-50"
                                                        placeholder="<?= $tag ?>" />
                                                </label>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="message">Message</label>
                                                <textarea name="message" id="" cols="30" rows="10" class="form-control">
                                                <?= $about ?>
                                                </textarea>
                                            </div>
                                            <button type="button" class="btn btn-danger float-start"
                                                data-bs-dismiss="modal">
                                                Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary float-end" value="create">
                                                Update
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn" data-bs-target="#delete" data-bs-toggle="modal">
                            <i class="fa-solid fa-trash-can text-danger"></i>
                        </button>
                        <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h3 class="fw-bold"> Delete <br>
                                            Are You Sure
                                        </h3>
                                    </div>
                                    <div class="modal-body p-5">
                                        <form action="#" method="post">
                                            <input type="input" value="<?= $list['id'] ?>" name="id">
                                            <button type="submit" class="btn btn-primary" value="delete" name="delete">
                                                Yes
                                            </button>
                                            <button type="button" class="btn btn-danger float-end" data-bs-dismiss="modal">
                                                Cancel
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach ?>
    </div>
</div>