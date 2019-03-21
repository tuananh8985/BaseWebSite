
<div class="title_widget"><span>Đăng ký & tư vấn</span></div>
<div class="timkiem_ajax">
    <form name="searh_project" class="form-register-home">
        <div class="row">
            <div class="col-sm-6">
                <input type="text" class="form-control" name="name" placeholder="HỌ TÊN" data-validation="required">
            </div>
            <div class="col-sm-6">
                <input class="datepicker" data-date-format="dd/mm/yyyy" class="form-control" name="ngaykham"
                    placeholder="NGÀY KHÁM" data-validation="required">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <input type="text" class="form-control" name="gender" placeholder="GIỚI TÍNH"
                    data-validation="required">
            </div>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="email" placeholder="EMAIL"
                    data-validation="required,email">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <input type="text" class="form-control" name="phone" placeholder="ĐIỆN THOẠI"
                    data-validation="required">
            </div>
            <div class="col-sm-6">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <textarea class="form-control" rows="5" style="height:150px" name="content" placeholder="NỘI DUNG"
                    data-validation="required"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <input type="submit" class="bt_submit_home" value="GỬI ĐI">
            </div>
        </div>
    </form>
    <script>
        $(document).ready(function () {
            $('.datepicker').datepicker({
                startDate: '-3d'
            });

            $('.bt_submit_home').on('click', function () {
                var url = 'http://demo3.skyvietnam.vn/nhakhoahoanmy/ajax';
                $.ajax({
                    type: "POST",
                    url: url,
                    data: $(".form-register-home").serialize(),
                    success: succes

                });
                return false;
            })
        })
        function succes(data, status) {
            //alert(data);
            $('.timkiem_ajax').html(data);
        }
    </script>
</div>
