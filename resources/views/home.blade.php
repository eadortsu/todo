@extends('layouts.app')

@section('content')

    <!-- /page sidebar -->

    <!-- Main Container -->
    <div class="gx-main-container">


        <!-- Main Content -->
        <div class="gx-main-content">
            <!--gx-wrapper-->
            <div class="gx-wrapper">
                <div class="gx-module">
                    <div id="gxModuleSidebar" class="gx-module-sidenav">
                        <div class="module-side">
                            <div class="module-side-header">
                                <div class="module-logo">
                                    <i class="zmdi zmdi-email mr-3"></i>
                                    <span>To-Do</span>
                                </div>
                            </div>
                            <div class="module-side-content">
                                <div class="module-side-scroll custom-side-scrollbar" style="position: relative;">
                                    <div class="module-add-task">
                                        <button class="btn gx-btn-shadow btn-block btn-primary text-uppercase"
                                                data-toggle="modal"
                                                data-target="#composeModal">
                                            <i class="zmdi zmdi-assignment zmdi-hc-fw"></i>
                                            <span>Add Task</span>
                                        </button>
                                    </div>
                                    <ul class="module-nav">
                                        <li>
                                            <a class="active" href="javascript:void(0)">
                                                <i class="zmdi zmdi-menu"></i>
                                                <span>All</span>
                                            </a>
                                        </li>
                                        <li class="module-nav-label">Filters</li>

                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="zmdi zmdi-calendar"></i>
                                                <span>Today</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="zmdi zmdi-info"></i>
                                                <span>Priority</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="zmdi zmdi-star"></i>
                                                <span>Starred</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="zmdi zmdi-check"></i>
                                                <span>Done</span>
                                            </a>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="module-box">
                        <div class="module-box-header">
                            <a id="gxModuleSideNav" href="javascript:void(0)" class="drawer-btn d-block d-lg-none">
                                <i class="zmdi zmdi-menu"></i>
                            </a>
                            <div class="module-box-header-inner">
                                <div class="search-bar right-side-icon bg-transparent d-none d-sm-block">
                                    <div class="form-group">
                                        <input class="form-control border-0" placeholder="Search mails" value=""
                                               type="search">
                                        <button class="search-icon"><i class="zmdi zmdi-search zmdi-hc-lg"></i></button>
                                    </div>
                                </div>

                                <div class="nav-searchbox dropdown d-inline-block d-sm-none">
                                    <a href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true"
                                       class="d-inline-block action-btn size-30" aria-expanded="false">
                                        <i class="zmdi zmdi-search zmdi-hc-fw"></i>
                                    </a>
                                    <div aria-hidden="true"
                                         class="p-0 dropdown-menu search-bar search-dropdown">
                                        <div class="form-group">
                                            <input class="form-control border-0" placeholder="" value="" type="search">
                                            <button class="search-icon"><i class="zmdi zmdi-search zmdi-hc-lg"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="module-box-header-right">
                                   {{-- <a class="action-btn" href="javascript:void(0)">
                                        <i class="zmdi zmdi-apps"></i>
                                    </a>
                                    <a class="action-btn" href="javascript:void(0)">
                                        <i class="zmdi zmdi-notifications-none"></i>
                                    </a>--}}
                                    <span class="dropdown">
                                        <a class="dropdown-toggle no-arrow d-inline-block ml-2" href="#" role="button"
                                           id="userInfo"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="bg-blue user-avatar size-40 text-white">{{$initials}}</span>
                                        </a>

                                        <span class="dropdown-menu dropdown-menu-right" aria-labelledby="userInfo">
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="zmdi zmdi-account zmdi-hc-fw mr-2"></i>
                                                {{Auth::user()->name}}
                                            </a>

                                             <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="zmdi zmdi-sign-in zmdi-hc-fw mr-2"></i>
                                                Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>

                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="module-box-content">
                            <div class="module-box-topbar">
                                <div class="ml-sm-5 form-checkbox">
                                    <input type="checkbox" value="value2" name="name2">
                                    <span class="check">
                                        <i class="zmdi zmdi-check zmdi-hc-lg"></i>
                                    </span>
                                </div>
                                {{--<div class="dropdown ml-3">
                                    <span class="pointer d-inline-block">None</span>
                                    <a class="dropdown-more dropdown-toggle" href="#" role="button"
                                       id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                        <i class="zmdi zmdi-chevron-down zmdi-hc-fw zmdi-hc-lg"></i>
                                    </a>

                                    <div class="dropdown-menu"
                                         aria-labelledby="dropdownMenuLink1">
                                        <a class="dropdown-item active" href="#">None</a>
                                        <a class="dropdown-item" href="#">All</a>
                                        <a class="dropdown-item" href="#">Read</a>
                                        <a class="dropdown-item" href="#">Unread</a>
                                    </div>
                                </div>--}}
                            </div>
                            <div class="module-list">
                                <div id="sortable" class="ui-sortable custom-scrollbar module-list-scroll todo-items"
                                     style="position: relative;">

                                    @foreach($items as $item)
                                    <div  id="item-{{$item->id}}" class="module-list-item @if($item->status == '1') text-muted text-strikethrough @endif">
                                        <i class="zmdi zmdi-menu draggable-icon d-none d-sm-flex pr-1"></i>
                                        <div class="form-checkbox ml-sm-4 mr-3">
                                            <input id="check-item-{{$item->id}}"  onclick="checked_list('{{$item->id}}')" type="checkbox" @if($item->status == '1') checked @endif value="1" name="check">
                                            <span class="check"><i class="zmdi zmdi-check zmdi-hc-lg"></i></span>
                                        </div>
                                        <a href="javascript:void(0)" class="action-btn">
                                            <i onclick="delete_list({{$item->id}})" class="zmdi zmdi-delete"></i>
                                        </a>
                                        <div class="module-list-info">
                                            <div class="row">
                                                <div class="module-todo-content col-10 col-sm-10 col-xl-10">
                                                    <div id="todo-item-title-{{$item->id}}" class="subject text-truncate
">
                                                        <h1>{{$item->title}}</h1>

                                                    </div>
                                                    <div class="manage-margin">
                                                        <p>{{$item->comment}}</p>
                                                        <p><i class="zmdi zmdi-time-countdown"></i>
                                                            <small>
                                                                {{$item->time}}
                                                            </small>
                                                        </p>

                                                    </div>
                                                </div>

                                                <div class="col-md-2 col-sm-2">
                                                    @if($item->starred == '0')
                                                        <a  onclick="star_list({{$item->id}})" href="javascript:void(0)" class="action-btn">
                                                            <i id="star-item-{{$item->id}}"  class="zmdi zmdi-star-outline"></i>
                                                        </a>
                                                        @else
                                                        <a   onclick="unstar_list({{$item->id}})" href="javascript:void(0)" class="action-btn ">
                                                            <i id="star-item-{{$item->id}}"  class="zmdi zmdi-star"></i>
                                                        </a>
                                                        @endif
                                                        @if($item->priority == '1')
                                                    <span class="badge text-white bg-red lighten-3">Priority</span>
                                                        @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach





                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/gx-wrapper-->

            <!-- Footer -->
            <footer class="gx-footer">
                <div class="d-flex flex-row justify-content-between">
                    <p> Copyright Eadortsu © {{date('Y')}}</p>

                </div>
            </footer>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /main container -->
    <div class="modal fade" id="composeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-box" role="document">
            <div class="modal-content">
                <div class="modal-box-header bg-primary modal-header">
                    <h4 class="modal-title">
                        Add Todo Item
                        <a href="javascript:void(0)" class="action-btn text-white" data-dismiss="modal"
                           aria-label="Close">
                            <i class="zmdi zmdi-close"></i>
                        </a>
                    </h4>
                </div>
                <div class="modal-box-content">
                    <div class="row no-gutters">


                        <div class="col-lg-12 d-flex flex-column order-lg-1">
                            <form method="post" action="{{route('item.store')}}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" placeholder="Title">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="comment" placeholder="Comments"></textarea>
                                </div>


                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker1'>
                                            <input placeholder="Time" type='text' class="form-control" title=""/>
                                            <span class="input-group-addon">
                                                    <i class="zmdi zmdi-calendar"></i>
                                                </span>
                                        </div>

                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="priority" value="1" id="remember"> High Priority</label>
                                </div>

                                <button type="submit" class="gx-btn gx-btn-primary" >
                                    <i class="zmdi zmdi-account-box"></i>
                                    <span>Add</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-box-footer d-flex">

                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

<script>

    function checked_list(id) {

        if($('#check-item-'+id).prop('checked') == true){
            var status = '1';
        }else {
            var status = '0';
        }


        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "PUT",
            url: "item/"+id,
            data: {status: status},
            success: function( msg ) {
                document.getElementById("item-"+ id).classList.toggle("text-muted");
                document.getElementById("item-"+ id).classList.toggle("text-strikethrough");

            }
        });



    }

    function star_list(id) {

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "PUT",
            url: "item/"+id,
            data: {starred: '1'},
            success: function( msg ) {
                document.getElementById("star-item-"+ id).classList.toggle("zmdi-star");
                document.getElementById("star-item-"+ id).classList.toggle("zmdi-star-outline");

            }
        });



    }
    function unstar_list(id) {

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "PUT",
            url: "item/"+id,
            data: {starred: '0'},
            success: function( msg ) {
                document.getElementById("star-item-"+ id).classList.toggle("zmdi-star-outline");
                document.getElementById("star-item-"+ id).classList.toggle("zmdi-star");
            }
        });



    }


    function delete_list(id) {
       var r = confirm("Are you sure Delete Todo item?");
        if (r == true) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                type: "DELETE",
                url: "item/"+id,
                success: function( msg ) {

                    item = document.getElementById('item-'+id);
                    item.parentNode.removeChild(item);
                }
            });
        }


    }


</script>
@stop
