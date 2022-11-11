@extends('admin.layout')

@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">Liệt kê danh mục sản phẩm</div>

    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>

      <div class="col-sm-4">
      </div>

      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>

    <div>
        <table class="table" ui-jq="footable" ui-options='{"paging": {"enabled": true },"filtering": {"enabled": true},"sorting": {"enabled": true}}'>

          <thead>
            <tr>
              <th style="width:20px;">
                <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label>
              </th>
              <th>Tên thương hiệu</th>
              <th>Ẩn/Hiện</th>
              <th data-breakpoints="xs sm md" data-title="DOB">Ngày thêm</th>
              <th style="width:60px;">Chức năng</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($brand_product as $item )
            <tr data-expanded="true">
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td>{{$item->brand_name}}</td>
              <td>    
                @if ($item->status == 0)
                    <a href="{{URL::to('unactive-brand-product/'.$item->id)}}">{{('Hiển thị')}}</a>
                @else
                    <a href="{{URL::to('active-brand-product/'.$item->id)}}">{{('Ẩn')}}</a>
                @endif
              </td>
              <td>{{$item->created_at}}</td>
              <td>
                <a href="" class="active" ui-toggle-class=""> 
                  <center> 
                    <a href="{{URL::to('edit-brand-product/'.$item->id)}}" class="active styling-edit">
                      <i class="fa fa-pencil-square-o text-success text-active"></i></a>  
                    <a onclick="return confirm('Bạn có chắc chắn muốn xoá hay không ?')" href="{{URL::to('delete-brand-product/'.$item->id)}}" class="active styling-edit" > 
                      <i class="fa fa-times text-danger text"></i> </a> 
                </center> 
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
</div>
@endsection
