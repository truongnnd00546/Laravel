@extends('layout.master', [
    'page_title' => 'Tạo mới bộ sưu tập  | Seafashion Admin Page',
    'current_menu' => 'collection_manager',
    'current_sub_menu' => 'create_new',
])
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">add</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">TẠO MỚI BỘ SƯU TẬP</h4>
                    @if ($errors->any())
                        <div class="alert alert-rose">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="/admin/collection" class="form-horizontal">
                    {{csrf_field()}}
                    <div class="card-content">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-sm">
                                <h6>Tên bộ sưu tập</h6>
                                <div class="{{$errors->has('name')?' has-error':''}}">
                                    <input type="text" name="name" class="{{$errors->has('name')?' error':''}}">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-sm">
                                <h6>Mô tả</h6>
                                <div class="{{$errors->has('description')?' has-error':''}}">
                                    <input type="text" name="description" class="{{$errors->has('description')?' error':''}}">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-sm">
                                <h6>Ảnh đại diện</h6>
                                <div class="{{$errors->has('thumbnail')?' has-error':''}}">
                                    <input type="text" name="thumbnail" class="{{$errors->has('thumbnail')?' error':''}}">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <button type="submit" value="Submit" class="btn btn-fill btn-success">Lưu
                                    <div class="ripple-container"></div>
                                </button>
                                <button type="reset" value="Reset" class="btn btn-fill btn-rose">Làm lại
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
