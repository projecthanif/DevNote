<article>
        <!-- Modal Form for Update -->
        <div class="modal" id="update">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Update Your Todo List</h3>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="title">Title
                                <?= $list['id']  ?>
                                <input type="text" name="title" id="" class="form-control" required placeholder="" />
                            </label>
                            <label for="time">Time
                                <input type="date" name="time" id="" class="form-control time" />
                            </label>
                            <br />
                            <label for="Tag">Tag
                                <input type="text" name="Tag" id="" class="form-control w-50" placeholder="" />
                            </label>
                        </div>
                        <div class="form-group mb-3">
                            <label for="message">Message
                                <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                            </label>
                        </div>
                        <div class="button">
                            <button type="button" class="btn red" data-bs-dismiss="modal" onclick="closeNav(updateTodo)">
                                Cancel
                            </button>
                            <button type="submit" class="btn blue" value="create">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </article>