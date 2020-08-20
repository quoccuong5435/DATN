@extends('admin.master')
@section('main-content')

	<div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                        </li>
                        <li class="active-bre"><a href="#"> Danh sách loại phòng</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-1">
                     @if(Session::has('thongbao'))
                            <div class="alert alert-success">
                                {{Session::get('thongbao')}}
                            </div>
                                   

                            
                        @endif
                    <h2>Danh sách tất cả loại phòng</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên loại phòng</th>
                                <th>Mô tả</th>
                                
                                @if(Auth::User()->role_user==0)
                                <th>Sửa</th>
                                <th>Khóa</th>
                               
                                @endif

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list_room_type as $lroom_type)
                            <tr>
                                <td>{{$lroom_type->id}}</td>
                                <td>{{$lroom_type->room_type}}</td>
                                <td>{{$lroom_type->room_type_description}}</td>
                                
                                @if(Auth::User()->role_user==0)
                                <td><a href="{{ route('edit_room_type',($lroom_type->id)) }}" class="sb2-2-1-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                                <form action="{{ route('set_status',($lroom_type->id)) }}" method="POST" accept-charset="utf-8">
                                    @csrf
                                    <td><a href="" class="sb2-2-1-edit"><button class="fa fa-lock" aria-hidden="true"></button></a></td>
                                </form>
                                                                
                                
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
{{-- <script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/admin/changeStatus',
            data: {'status': status, 'id': id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script> --}}
@endsection