<script type="text/javascript">

    function changepos() {
        document.frm1.action = "<?php echo DOMAINAD; ?>products/changepos";
        document.frm1.submit();
    }
    function process() {
        document.frm1.action = "<?php echo DOMAINAD; ?>products/process";
        document.frm1.submit();
    }
    function MM_jumpMenu(targ,selObj,restore){ //v3.0
        eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
        if (restore) selObj.selectedIndex=0;
    }
</script>
<?php echo $this->Form->create(null, array('url' => DOMAINAD . 'products/search', 'type' => 'post', 'name' => 'frm1')); ?>
<div id="khung">
    <div id="main">
        <div class="toolbar-list" id="toolbar">
            <ul>
                <li id="toolbar-new"> <a href="<?php echo DOMAINAD; ?>products/add" class="toolbar"> <span class="icon-32-new"></span> Thêm mới </a> </li>
                <li class="divider"></li>
                <li id="toolbar-help"> <a href="#messages" rel="modal" class="toolbar"> <span class="icon-32-help"></span> Trợ giúp </a> </li>
                <li id="toolbar-unpublish"> <a href="<?php echo DOMAINAD; ?>home" class="toolbar"> <span class="icon-32-unpublish"></span> Đóng </a> </li>
            </ul>
            <div class="clr"></div>
        </div>
        <div class="pagetitle icon-48-nhomtin">
            <h2>Sản phẩm</h2>
        </div>
        <div class="clr"></div>
    </div>
</div>
<div class="content-box">
    <div class="content-box-header">
        <table class="timkiem">
            <tr>
                <td valign="top">Tìm kiếm</td>
                <td><input type="text" id="field2c" name="keyword" class="text-input" value=""></td>
                <td><select name="listCat" id="jumpMenu">
                        <option value="">--- Tất cả các danh mục ---</option>
                        <?php foreach ($list_cat as $k => $v) { ?>
                        <option value="<?php echo $k; ?>"><?php echo $v; ?></option>
                        <?php } ?>
                    </select></td>
                <td><input type="submit" name="" value="Tìm kiếm" class="button" /></td>
            </tr>
        </table>
        <!--<ul class="content-box-tabs">
            <li><a href="#tab1" class="default-tab">Danh sách tin</a></li>
            <li><a href="#tab2"></a></li>
        </ul>-->
        <div class="clear"></div>
    </div>
    <div class="content-box-content">
   <div class="tab-content default-tab" id="tab1">
            <table width="100%">
                    <thead>
                        <tr>
                            <th width="2%"><input type="checkbox" name="all" id="checkall" /></th>
                            <th width="4%">STT</th>
                            <th width="12%" style="text-align:center;">Ảnh</th>
                            <th width="20%" style="text-align:center;">Tên sản phẩm</th>
                            <th width="8%" style="text-align:center;"><a href="#" onclick="changepos()">Vị trí</a>
                                <input name="sortId" type="hidden" value="" />
                            </th>
<th width="8%" nowrap><a href="#" onclick="changepos()">SP nổi bật</a></th>

                            <th width="11%">Cập nhật</th>
                            <th width="12%">Xử lý</th>
                            <th width="3%">ID</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td colspan="9"><div class="bulk-actions align-left">
                                    <select name="process">
                                        <option value="0">Lựa chọn</option>
                                        <option value="1">Active</option>
                                        <option value="2">Hủy Active</option>
                                        <option value="3">Delete</option>
                                    </select>
                                    <a class="button" href="#" onclick="process()">Thực hiện</a> </div>
                                <div class="pagination">
                                    <?php
                                        echo $this->Paginator->first('« Đầu ', null, null, array('class' => 'disabled'));     
                                        echo $this->Paginator->prev('« Trước ', null, null, array('class' => 'disabled')); 
                                        echo $this->Paginator->numbers()." ";
                                        echo $this->Paginator->next(' Tiếp »', null, null, array('class' => 'disabled')); 
                                        echo $this->Paginator->last('« Cuối ', null, null, array('class' => 'disabled')); 
                                        echo " Page ".$this->Paginator->counter();
                                    ?>
                                </div>
                                <div class="clear"></div></td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($product as $key => $value) { ?>
                        <tr>
                            <td><input type="checkbox" name="chon[<?php echo $value['Product']['id']; ?>]" value="1" /></td>
                            <td><?php echo $key + $startPage;?></td>
                            <td style="text-align:center;"><img src="<?php echo DOMAINAD; ?><?php echo $value['Product']['images']; ?>" height="40"></td>
                            <td><a href="<?php echo DOMAINAD ?>products/edit/<?php echo $value['Product']['id']; ?>" title="Edit"><?php echo $value['Product']['name']; ?></a>  <?php if(date('Y-m-d', strtotime($value['Product']['modified'])) == date('Y-m-d')) { ?><img src="<?php echo DOMAINAD ?>images/icons/iconnew.gif" alt="New" /><?php } ?></td>
                            <td style="text-align:center;"><input class="text-input medium-input" style="text-align:center; width:30% !important;" type="text" value="<?php echo $value['Product']['pos']; ?>" name="order[<?php echo $value['Product']['id']; ?>]" /></td>
                         
						<td>
                                <label><input type="radio" name="setoff[<?php echo $value['Product']['id']; ?>]" value="1" id="spnb_0" <?php if($value['Product']['setoff'] == 1) {echo 'checked';} ?>> Có</label>
                                <label><input name="setoff[<?php echo $value['Product']['id']; ?>]" type="radio" id="spnb_1" value="0" <?php if($value['Product']['setoff'] == 0) {echo 'checked';} ?>>  Không</label></td>
	
                            <td><?php echo date('d-m-Y', strtotime($value['Product']['modified'])); ?></td>
                            <td>
                                <a href="<?php echo DOMAINAD ?>products/edit/<?php echo $value['Product']['id']; ?>" title="Edit"><img src="<?php echo DOMAINAD ?>images/icons/pencil.png" alt="Edit" /></a> <a href="javascript:confirmDelete('<?php echo DOMAINAD ?>products/delete/<?php echo $value['Product']['id']; ?>')" title="Delete"><img src="<?php echo DOMAINAD ?>images/icons/cross.png" alt="Delete" /></a>
                                <?php
                                    if ($value['Product']['status'] == 0) {
                                        ?>
                                <a href="<?php echo DOMAINAD ?>products/active/<?php echo $value['Product']['id']; ?>" title="Kích hoạt" class="icon-5 info-tooltip"><img src="<?php echo DOMAINAD ?>images/icons/Play-icon.png" alt="Kích hoạt" /></a>
                                <?php
                                    } else {
                                        ?>
                                <a href="<?php echo DOMAINAD ?>products/close/<?php echo $value['Product']['id']; ?>" title="Đóng" class="icon-4 info-tooltip"><img src="<?php echo DOMAINAD ?>images/icons/success-icon.png" alt="Ngắt kích hoạt" /></a>
                                <?php
                                    }
                                    ?></td>
                            <td align="right"><?php echo $value['Product']['id']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>
<?php echo $this->Form->end(); ?>