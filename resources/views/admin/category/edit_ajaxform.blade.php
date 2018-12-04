   
     <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/admin/update_questioncategory') }}" method="post" id="">
                                  @csrf
                                <div class="form-group">
                                    <label class="form-label">Category Name</label>
                                    <input name="category_name" id="editcategory_name" type="text" class="form-control" data-validation="[NOTEMPTY]" required value="{{ $categories[0]->name }}">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <select name="category_status" id="editcategory_status" class="form-control" data-validation="[NOTEMPTY]" required>
                                        <option value="1" <?php if($categories[0]->status == 1 ) echo "selected"; ?> >Active</option>
                                        <option value="0" <?php if($categories[0]->status == 0 ) echo "selected"; ?> >Inactive</option>
                                    </select>
                                </div>


                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="cat_id" name="edit_val" value="{{ $categories[0]->id }}">
                            <button type="button" class="btn" data-dismiss="modal">Close</button>
                            <button type="submit" id="update_questcategory" class="btn btn-primary">Update</button>
                            </form>

                        </div>
              </div>
     </div>