<div id="@yield('sweet-form-id')" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="'myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">@yield('sweet-form-title')</h4>
            </div>
            <div class="col-sm-12">
                <div class=" form">
                    @yield('sweet-form-body')
                </div> <!-- .form -->
            </div> <!-- col -->
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-info update-grade" form="@yield('sweet-form-footer')">保存修改</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->
