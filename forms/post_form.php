<?php

function get_post_form($path, $action = 'new', $post = null)
{
    return '<form method="post" enctype="multipart/form-data" action="' . $path . '" class="form-horizontal col-md-6 col-md-offset-3">
            <h2>' . (($action == 'edit') ? "Редактируем $post->title" : 'Добавить новый') . '</h2>
            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">Заголовок</label>
                <div class="col-sm-10">
                    <input value="' . ($post ? $post->title : null ) . '" type="text" name="title" class="form-control" id="input1" placeholder="Название поста..."/>
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-sm-2 control-label">Описание</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" id="description"
                              placeholder="Содержание...">' . ($post ? $post->description : null ) . '</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="file" class="col-sm-2 control-label">Файл</label>
                <div class="col-sm-10">
                   <input id="file" class="form-control"type="file" name="file" />
                </div>
            </div>
            <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="' . (($action == 'new') ? 'SAVE' : 'UPDATE') . '"/>
        </form>';
}