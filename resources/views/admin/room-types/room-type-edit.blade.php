@extends('admin.master')
@section('main-content')

	<div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                        </li>
                        <li class="active-bre"><a href="#"> Sửa loại phòng</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <h2>Sửa loại phòng</h2>
                    <form action="{{ route('edit_room_type',($roomtype->id)) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="list-title" type="text" value="{{$roomtype->room_type}}" name="room_type" class="validate">
                                <label for="list-title">Nhập loại phòng</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="list-title" type="text" value="{{$roomtype->room_type_description}}" name="room_type_description" class="validate">
                                <label for="list-title">Mô tả</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="submit" class="waves-effect waves-light btn-large" value="Sửa">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection