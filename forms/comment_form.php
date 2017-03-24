<?php
function get_comment_form($path, $action = 'new', $comment = null)
{
    return '<form method="post" enctype="multipart/form-data" action="' . $path . '" class="form-horizontal col-md-6 col-md-offset-3">
            <h2>' . (($action == 'edit') ? "Редактируем $comment->post_id" : 'Добавить новый комментарий') . '</h2>
            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">Айди поста</label>
                <div class="col-sm-10">
                    <input value="' . ($comment ? $comment->post_id : null) . '" type="number" name="post_id" class="form-control" id="input1" placeholder="Айди поста..."/>
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Описание</label>
                <div class="col-sm-10">
                    <textarea name="content" class="form-control" id="content"
                              placeholder="Содержание...">' . ($comment ? $comment->content : null) . '</textarea>
                </div>
            </div>
            <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="' . (($action == 'new') ? 'SAVE' : 'UPDATE') . '"/>
        </form>';
}