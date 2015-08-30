

        <div class="box">
            <div class="box-header">
                <h3 class="box-title"></h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Created at</th>
                            <th>Title</th>
                            <th>Short Description</th>
                            <th></th>
                        </tr>
                    </thead>
                        <tbody>
                                    @foreach ($article as $row) 

                                            <tr>
                                                <td>                
                                                    <div class="col-md-1 blok-tanggal color-RedSolusi font-white">
                                                        <div class="col-md-12 blok-tanggal-d">{{ date_format($row->created_at,"d") }}</div>
                                                        <div class="col-md-12 blok-tanggal-my">{{ date_format($row->created_at,"M Y") }}</div>
                                                    </div>
                                                </td>
                                                <td>{{ $row->title }}</td>
                                                <td>{{ $row->short_description }}</td>
                                                <td>  
                                                <a class="btn btn-app"  onclick="ubah({{ $row->id }})" >
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>     
                                                {{ Form::open(array('url' => 'article/' . $row->id,'id' => 'article' . $row->id, 'class' => 'pull-right')) }}
                                                        {{ Form::hidden('_method', 'DELETE') }}
                                                         <a class="btn btn-app"  onclick="hapus({{ $row->id }})" >
                                                            <i class="fa fa-trash"></i> Delete
                                                        </a>   
                                                  {{ Form::close() }}

                                                <a class="btn btn-app"  onclick="ubah({{ $row->id }})" >
                                                    <i class="fa fa-eye"></i> Aktif
                                                </a>                         

                                                </td>
                                            </tr>

                                     @endforeach          
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->