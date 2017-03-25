@extends('admin.layouts.master')
@section('title', '商城后台管理')
@section('page-title', '欢迎使用商品管理')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body table-rep-plugin">
                <div class="table-responsive" data-pattern="priority-columns">
                    <table id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>预览图</th>
                                <th>商品名称</th>
                                <th>数量</th>
                                <th>商品描述</th>
                                <th>价格</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <div class="clear"></div>

            </div>
        </div>
    </div>
</div> <!-- end row -->

@endsection

