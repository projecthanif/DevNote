<section>
    <button class="btn-new" id="new" onclick="create()">
        <i class="fa fa-plus" title="create"></i>
    </button>
    <!-- Modal Form for Create -->
    <div class="modal" id="create">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Create Your Todo List</h3>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="title">Title
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
                        <button type="button" class="btn red" data-bs-dismiss="modal" onclick="closeNav(newList)">
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
</section>