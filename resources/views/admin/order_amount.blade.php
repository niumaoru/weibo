<style type="text/css" media="screen">
    table{
        font-size: 14px;
    }
    .hlAsc{
        background: white;
        color: red;
    }
    .hlDesc{
        background: white;
        color: green;
    }
</style>
<div class="box">
    {{--<div class="box-header">
        <div class="pull-right">
            <div class="btn-group pull-right" style="margin-right: 10px">
                <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#filter-modal">
                    <i class="fa fa-filter"></i>&nbsp;&nbsp;筛选</a>
                <a href="{{url('/admin/count/goods')}}?_pjax=#pjax-container" class="btn btn-sm btn-facebook">
                    <i class="fa fa-undo"></i>&nbsp;&nbsp;撤销</a>
            </div>

            <div class="modal fade" id="filter-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">筛选</h4></div>
                        <!-- 筛选 -->
                        <form action="{{url('/admin/count/goods')}}" method="get">
                            <div class="modal-body">
                                <div class="form">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>货品编码</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-pencil"></i>
                                                </div>
                                                <input type="text" class="form-control name" placeholder="货品编码" name="goods_no" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>店铺</label>
                                            <div class="input-group">
                                                <select class="form-control shop_no " style="width: 500px;height: 200px" name="shop_no[]" multiple="multiple"  >
                                                    @foreach($shops as $shopNo=>$shopName)
                                                        <option value="{{$shopNo}}" >{{$shopName}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>品牌</label>
                                            <div class="input-group">
                                                <select class="form-control brand_id " style="width: 500px;height: 150px" name="brand_id[]" multiple="multiple">
                                                    @foreach($brands as $id=>$name)
                                                        <option value="{{$id}}" >{{$name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>仓库</label>
                                            <div class="input-group">
                                                <select class="form-control warehouse_no " style="width: 500px;height: 100px" name="warehouse_no[]" multiple="multiple"  >
                                                    @foreach($warehouses as $warehouseNo=>$warehouseName)
                                                        <option value="{{$warehouseNo}}" >{{$warehouseName}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">筛选时间</label>
                                        <div class="col-sm-10 " style="display:flex;flex-direction: row">
                                            <div class='col-sm-5 input-group date' id='datetimepicker1'>
                                                <input type='text' class="form-control" name="start" value="{{$start}}" />
                                                <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                            </div>
                                            <div class='col-sm-1 text-center' style="padding-top:0.5vw">
                                                至
                                            </div>
                                            <div class='col-sm-5 input-group date ' id='datetimepicker2'>
                                                <input type='text' class="form-control" name="end" value="{{$end}}" />
                                                <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <p><input type="checkbox" name="is_export" value="true"  /> 导出</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary submit">提交</button>
                                <button type="reset" class="btn btn-warning pull-left">撤销</button></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <span>
            <a class="btn btn-sm btn-primary grid-refresh">
                <i class="fa fa-refresh"></i>刷新</a>
            <i class="btn btn-sm btn-danger">筛选日期：</i>
            <i class="btn btn-sm btn-default" style="font-size:15px">{{$start}}</i>---
            <i class="btn btn-sm btn-default" style="font-size:15px" >{{$end}}</i>
        </span>

    </div>--}}
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <tbody>
            <tr>

                <th>订单金额区间</th>
                <th>订单数量</th>
                <th>订单金额</th>
                <th>订单数占比</th>
                <th>订单金额占比</th>
            </tr>

            {{--@foreach($finals as $key =>$goods)--}}
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            {{--@endforeach--}}
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>
{{--<script data-exec-on-popstate>
    $(function() {
        $('#datetimepicker1').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            locale: moment.locale('zh-cn')
        });
        $('#datetimepicker2').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            locale: moment.locale('zh-cn')
        });
        $('.grid-refresh').on('click',
            function() {
                $.pjax.reload('#pjax-container');
                toastr.success('刷新成功 !');
            });
    });
</script>--}}
