@extends('layout.master', [
    'page_title' => 'Tạo mới đơn hàng',
    'current_menu' => 'order_manager',
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
                    <h4 class="card-title">TẠO MỚI ĐƠN HÀNG</h4>
                    @if ($errors->any())
                        <div class="alert alert-rose">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="/admin/order" class="form-horizontal">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Danh mục</h6>
                                <select type="text" name="category">
                                    <option>Đang phát triển</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <h6>Sản phẩm</h6>
                                <select type="text" name="category">
                                    <option>Đang phát triển</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Tên khách hàng</h6>
                                <input type="text" name="ship_name" class="{{$errors->has('ship_name')?' error':''}}">
                            </div>
                            <div class="col-md-6">
                                <h6>Số điện thoại</h6>
                                <input type="text" name="ship_phone" class="{{$errors->has('ship_phone')?' error':''}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6>Địa chỉ</h6>
                                <input type="text" name="ship_address"
                                       class="{{$errors->has('ship_address')?' error':''}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Số lượng</h6>
                                <input type="number" name="customer_id" class="{{$errors->has('customer_id')?' error':''}}">
                            </div>
                            <div class="col-md-6">
                                <h6>Tổng giá</h6>
                                <input style="color: red;font-weight: bold" type="total_price" name="sizes" class="{{$errors->has('total_price')?' error':''}}">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
