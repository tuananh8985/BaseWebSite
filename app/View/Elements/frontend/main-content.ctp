<div class="excerpt-cate">
    <h1 class="title_cate"><img
        src="<?php echo DOMAIN ?>resources/upload/images/icon/icon_cont.png"><span>Liên hệ</span>
    </h1>
</div>
<div class="form-contact">
    <div class="contact-info">
        <p><span style="font-size:18px"><span style="font-family:roboto">TRUNG T&Acirc;M NHA KHOA THẨM MỸ &amp; IMPLANT</span></span></p>
        <p><span style="font-size:14px"><span style="font-family:roboto">Địa chỉ: Số 42, Đường L&ecirc; C&ocirc;ng Thanh, TP. Phủ L&yacute;, H&agrave; Nam </span></span></p>
        <p><span style="font-size:14px"><span style="font-family:roboto">(Đối diện s&acirc;n vận động TP. Phủ L&yacute;) </span></span></p>
        <p><span style="font-size:14px"><span style="font-family:roboto">SĐT: 0898 727 762 </span></span></p>
        <p><span style="font-size:14px"><span style="font-family:roboto">Gmail: nhakhoa1hanam@gmail.com </span></span></p>
        <p><span style="font-size:14px"><span style="font-family:roboto">Website: www.hoanmydental.com</span></span></p>
    </div>
    <div class="box_form_about">
        <p class="title_from">Cảm ơn quý vị đã vào thăm Website của chúng tôi! Nếu Quý vị có yêu cầu hay ý kiến đóng góp nào, xin hãy sử dụng mẫu dưới đây. Chúng tôi sẽ trả lời những yêu cầu của Quý vị trong thời gian sớm nhất.</p>
        <form class="form_about" id="form-contact" method="post" action="http://demo3.skyvietnam.vn/nhakhoahoanmy/lien-he">
            <div class="row">
                <div class="col-sm-12 form-group">
                    <input type="text" class="form-control" name="name"
                        placeholder="Họ tên(*)"
                        data-validation="required">
                </div>
                <div class="col-sm-12 form-group">
                    <input type="text" class="form-control" name="email"
                        placeholder="Email(*)" data-validation="required,email">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <input type="text" class="form-control" name="phone"
                        placeholder="Điện thoại(*)"
                        data-validation="required,length,number"
                        data-validation-allowing="float"
                        data-validation-length="10-20">
                </div>
                <div class="col-sm-12 form-group">
                    <input type="text" class="form-control" name="address"
                        placeholder="Địa chỉ(*)"
                        data-validation="required">
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="3" style="height:150px" name="content"
                    placeholder="Nội dung(*)"
                    data-validation="required"></textarea>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="capt"
                            data-validation="required"
                            placeholder="Mã bảo vệ">
                    </div>
                </div>
                <div class="col-sm-6">
                    <img id="Imageid" src="captcha/1552889745.9252.html" style="width: 150; height: 30; border: 0;" alt=" " />
                </div>
            </div>
            <button type="submit" class="btn btn-danger btn-send" style="cursor: pointer">
            Gửi                                    </button>
        </form>
    </div>
    <script>
        $(document).ready(function () {
            $.validate({
                form: '#form-contact',
                lang: 'vi',
                scrollToTopOnError: false

            });
        })
    </script>
</div>
<div class="map"></div>
<p><img alt="" src="<?php echo DOMAIN ?>resources/upload/images/map.png" style="height:351px; width:823px" /></p>