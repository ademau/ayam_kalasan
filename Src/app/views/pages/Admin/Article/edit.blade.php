              
             
                            <script>
                                CKEDITOR.replace( 'description' );

                            </script>    
                            <div id="box" class="box box-info">
                                <div class="box-header">
                                    <i class="fa fa-edit"></i>
                                    <h3 class="box-title">Edit <?php echo $row->title; ?></h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" onclick="tutupwindow()" title="Remove"><i class="fa fa-times"></i></button>
                                    </div><!-- /. tools -->
                                </div>
                                <form name="frmeditKonten" id="frmeditKonten" action="/Admin/Module/ModuleArticle" onsubmit="update();return false;">
                                     {{ Form::hidden('_method', 'PUT') }}
                    
                                <div class="box-body">
                                   <div class="form-group">
                                            <label>Title:</label>
                                            <input type="text" class="form-control" name="title" id="title" value="<?php echo $row->title; ?>">
                                            <input type="hidden" name="id" id="id" value="<?php echo $row->id; ?>">
                                            <input type="hidden" name="mode" id="mode" value="Update">
                                        </div>
                                        <div class="form-group">
                                            <label>Description:</label>
                                            <textarea class="ckeditor" type="text" name="description" id="description" value=""><?php echo $row->description; ?></textarea>
                                       
                                        </div>
                                        <div class="form-group">
                                            <label>Short Description:</label>
                                            <textarea   class="form-control" rows="3"  type="text" name="short_description" id="short_description"  value=""><?php echo $row->short_description; ?></textarea>
                                      
                                        </div>
                                        <div class="form-group">
                                            <label>Image:</label>
                                            <input type="text" class="form-control" name="image" id="image" value="<?php echo $row->image; ?>">
                                        </div>
                                </div>
                                <div class="box-footer clearfix">
                                            <button type="Button" class="btn btn-info" onclick="update({{$row->id}});return false;">
                                              <span class="glyphicon glyphicon-floppy-save"></span> Save
                                            </button>
                                     </div>
                                    </form>
                            </div>

                       
