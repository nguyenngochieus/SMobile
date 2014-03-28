     <div class="pageheader">
      <h2><i class="<?php if ($page=='trangchu') echo 'fa fa-dashboard'; elseif ($page=='nguoidung') echo 'fa fa-user'; elseif ($page=='sanpham') echo 'fa fa-laptop'; elseif ($page=='hoadon') echo 'fa fa-file-text'; elseif ($page=='tintuc') echo 'fa fa-rss'; elseif ($page=='binhluan') echo 'fa fa-comment-o'; elseif ($page=='danhgia') echo 'fa fa-check-square-o';?>"></i> <?php echo $title ?> </h2>
      <div class="breadcrumb-wrapper">
        <span class="label">Bạn đang ở: </span>
        <ol class="breadcrumb">           
          <li><a href="<?=base_url()?>admin"><?php echo 'Trang chủ'; ?></a></li>           
          <?php if ($page!='trangchu'): ?> 
          <li class="active"><a href="<?=base_url()?>admin/<?=$page?>"><?php echo $title; ?></a></li>
          <?php endif; ?>
        </ol>
      </div>
    </div>

      
    
    
    
    
    
    