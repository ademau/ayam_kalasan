    <script>
        CKEDITOR.replace( 'description' );

    </script>    
    <div class="box box-primary">
        <div class="box-header">
            <i class="fa fa-plus"></i>
            <h3 class="box-title">Add Content ({{$category_id}})</h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
              <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" onclick="tutupwindow()" title="Remove" onclick><i class="fa fa-times"></i></button>
            </div><!-- /. tools -->
        </div><!-- /.box-header -->
     <hr>    

        <div id="box-body" class="box-body">                     
            <form name="frmaddKonten" id="frmaddKonten" action="/Admin/Module/ModuleArticle" onsubmit="simpan();return false;">
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control" name="title" id="title" value="">
                   <input type="hidden" name="id" id="id" value="">
                   <input type="hidden" name="mode" id="mode" value="Simpan">
                    <input type="hidden" name="category_id" id="category_id" value="{{$category_id}}">
                </div><!-- /.form group -->
                <div class="form-group">
                    <label>Description:</label>
                    <textarea class="ckeditor" type="text" name="description" id="description" value=""></textarea>
                </div><!-- /.form group -->
                <div class="form-group">
                    <label>Short Description:</label>
                    <textarea  class="form-control" rows="3"  type="text" name="short_description" id="short_description" value=""></textarea>
                </div><!-- /.form group -->
                <div class="form-group">
                    <label>Image:</label>
                        <input type="text" class="form-control" name="image" id="image" value="">
                </div><!-- /.form group -->

                <button type="Submit" class="btn btn-info">
                  <span class="glyphicon glyphicon-floppy-save"></span> Save
                </button>
            </form>
    </div>

    </div>