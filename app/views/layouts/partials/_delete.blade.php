
<button class='btn btn-danger' type='button' data-toggle="modal" data-target="#confirmDelete" data-title="Delete Tag" data-message='Are you sure you want to delete this tag?'>
    <span class="glyphicon glyphicon-trash"></span> Delete
</button>

<div class="modal fade" id="confirmDelete" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Delete ?</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirm"><span class="glyphicon glyphicon-trash"></span> Delete</button>
            </div>
        </div>
    </div>
</div>
