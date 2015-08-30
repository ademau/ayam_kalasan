
                        <li>
                            <a href="{{asset('/Admin')}}">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Manage Content</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <?php 
                               
                                $hasil= category::select()->get();; 
                                $i=1;
                            ?>

                            <ul class="treeview-menu">
                                @foreach ($hasil as $row) 
                                <li><a href="{{asset('/Admin/Konten/'.$row->category_id)}}"><i class="fa fa-angle-double-right"></i> {{$row->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>

