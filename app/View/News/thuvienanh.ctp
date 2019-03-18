
 
 
 
  <script>
$(document).ready(function() {
    $('a.login-window').click(function() {

        //lấy giá trị thuộc tính href - chính là phần tử "#login-box"
        var loginBox = $(this).attr('href');

        //cho hiện hộp đăng nhập trong 300ms
        $(loginBox).fadeIn("slow");

        // thêm phần tử id="over" vào sau body
        $('body').append('<div id="over"></div>');
        $('#over').fadeIn(300);
        
        return false;
    });

    // khi click đóng hộp thoại
    $(document).on('click', "a.close, #over", function() { 
        $('#over, .login').fadeOut(300 , function() {
            $('#over').remove();  
        }); 
        return false;
    });
	
});
  </script>
<div class="right3">
								<div class="right31">
									<ul>
										<li class="vien1">THƯ VIỆN ẢNH</li>
										
									</ul>
								</div>
								<div class="right32">
								<?php foreach($listNews as $value){?>
									
										<a href="#login-box" class="login-window button">
										<img width="120" height="80" src="<?php echo DOMAINAD;?>img/news/<?php echo $value['News']['images']?>" style="float:left;margin-top: 10px;margin-left: 15px;margin-bottom: 10px;"/>
										</a>
										
								
								<?php }?>
								
									
								</div>
								
							</div>
							<?php
        echo $this->Paginator->first('« Đầu ', null, null, array('class' => 'disabled'));     
        echo $this->Paginator->prev('« Trước ', null, null, array('class' => 'disabled')); 
        echo $this->Paginator->numbers()." ";
        echo $this->Paginator->next(' Tiếp »', null, null, array('class' => 'disabled')); 
        echo $this->Paginator->last('« Cuối ', null, null, array('class' => 'disabled')); 
    ?>	

 
 
