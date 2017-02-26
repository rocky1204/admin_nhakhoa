@extends('templates.admin_template')
@section('maincontent')
    <div class="row">
        <div class="dashboard_graph">
            <div class="row x_title">
                <div class="col-md-12 col-sm-12 col-xs-12"><h3>Danh sách tin tức</h3></div>
            </div>
        </div>
    </div>
    {!! Form::open(array('route'=>'post_xoa_tin_tuc','id'=>'form_xoa_tin_tuc','class' => 'form_xoa_tin_tuc')) !!}
    <div class="row">
        <div >
     <table class="bangtin">
                        <tr class="tieudetin">
                            <td >
                                ID
                            </td>
                            <td >
                                Tiêu đề tin
                            </td>
                            <td >
                                Loại tin
                            </td>
                            <td >
                                Sửa tin
                            </td>
                            <td >
                                Chọn
                            </td>
                        </tr>
                        @foreach($ds_item as $tin)
                          <tr class="dstin">
                            <td >
                               {{ $tin->NewsID}}
                            </td>
                            <td >
                                {{ $tin->TitleVn}}
                            </td>
                            <td >
                                {{ $tin->NameVn}}
                            </td>
                            <td >
                                <img width="50%" src='{{url("/")}}/images/pencil_48.png'/>
                            </td>
                            <td >
                                  <input name="thao_tac[]" type="checkbox" value="{{ $tin->NewsID }}" />
                            </td>
                        </tr>
                        @endforeach
            </table>
            </div>
             <div class="phan_trang_admin">
                    {!! $ds_item->render() !!}
                </div>
            </div>
    {!! Form::close() !!}
     <div class="btn_xoa" onclick="kiem_tra_xoa()">Xóa danh sách đã chọn</div>
             <script>
        function kiem_tra_xoa()
        {
            //alert();
            if($("input:checkbox:checked").length)
            {
                kq = confirm("Bạn chắc chắn muốn xóa danh sách đã được chọn?");
                if(kq)
                {
                    document.getElementById('form_xoa_tin_tuc').submit();
                }
            }
            else
            {
                alert("Bạn vui lòng chọn tin tức muốn xóa");
            }
        }
    </script>
@stop
