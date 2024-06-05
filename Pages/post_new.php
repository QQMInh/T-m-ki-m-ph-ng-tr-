




<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Trang chủ</a></li>
          <li><a href="#">Đăng tin</a></li>
        </ol>
        <h1>Đăng tin mới</h1>
    

      </div>
    </section><!-- End Breadcrumbs -->

      <!--/ Intro Single star /-->

<div class="container">
     <?php if (isset($error)) {
                        echo $error;
                    }; ?>

     <?php if (isset($success)) {
                        echo $success;
                    }; ?>

            <form method="POST" enctype="multipar   t/form-data">
               <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="">Tỉnh/Thành phố</label>
                       <select class="form-control" onchange="getDistrictList(this.value)"
                        name="province" id="province">
                            <option value="0">Tỉnh/Thành phố</option>           
                       </select>
               </div>

              <div class="form-group col-md-4">
                  <label for="">Quận/huyện</label>
                      <select class="form-control" onchange="getWardList(this.value)" 
                        name="district" id="district"> 
                          <option value="0">Quận/huyện</option>
                      </select>
                </div>
          
                 <div class="form-group col-md-4">
                     <label for="">Phường/Xã</label>
                      <select class="form-control" name="ward" id="ward">
                      <option value="" selected="">Phường/Xã</option>
                      
               </select>
                 </div>

                <div class="form-group col-md-12">
                    <label for="text">Số nhà - Đường</label>
                    <input type="text" name="numberHouse" class="form-control" placeholder="Số nhà - Đường" required>
                </div>

                <div class="form-group col-md-12">
                    <div class="form-group">
                        <label for="">Nhu cầu</label>
                        <select class="form-control" name="typeId" required="">
                            <?php 
                               $sql_type="SELECT * FROM type";  
                                $kt_type=mysqli_query($conn,$sql_type);
                                while($row_type= mysqli_fetch_assoc($kt_type)){ ?>
        <option value="<?php echo $row_type['typeId'];?>"><?php echo $row_type['sell_rent'];?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                  
                
                <div class="form-group col-md-6">
                    <label for="file">Ảnh tổng quan ngôi nhà</label><br>
                    <input type="file" name="image" required multiple>
                </div>

                 <div class="form-group col-md-6">
                    <label for="file">Video</label><br>
                   <input type='file' name='file_video' >
                </div>
        
                 <div class="form-group col-md-4">
                    <label for="">Số tầng</label>
                    <input type="number" name="quantityFloor" class="form-control" min="1" required="">
                </div>
                 <div class="form-group col-md-4">
                    <label for="">Phòng ngủ</label>
                    <input type="number" name="quantityBed" class="form-control" min="1" required="">
                </div>
                 <div class="form-group col-md-4">
                    <label for="">Phòng tắm</label>
                    <input type="number" name="quantityBath" class="form-control" min="1" required="">
                </div>
     
                <div class="form-group col-md-6">
                    <label for="">Diện tích (m <sup>2</sup>)</label>
                    <input type="number" name="area" class="form-control" min="1" required="">
                </div>
    
                <div class="form-group col-md-6">
                  <label for="number">Giá Khoảng (VNĐ)</label>
                  <input type="number" name="price"class="form-control" placeholder="Giá khoảng"min="0" required>
                </div>

                <div class="form-group col-md-12">
                    <label for="">Thông tin tổng quát(ghi rõ cách liên lạc)</label>
            <textarea type="text-area"rows="3" name="description" class="form-control" placeholder="" required=""></textarea>
                </div>          
                
        <div class="tile-footer" >
            <button class="btn btn-primary" name="submit" type="submit" ><i class="fa fa-fw fa-lg fa-check-circle"></i>Đăng tin</button>
            <button class="btn btn-primary" type="reset"><i class="fa fa-fw fa-lg fa-times-circle"></i>Reset</button>
         </div>

                <div class="form-group col-md-12" style="color: red">Lưu ý: Đăng thông tin đúng sự thật nếu không sẽ bị xóa bài</div>
              
            </div>
      </form>     
</div>


<section id="contact" class="section-bg">
	<div class="container" data-aos="fade-up">

	  <div class="section-header">
		<h3>Liên hệ</h3>
		<p>Vui lòng phản hồi ý kiến của bạn trong form bên dưới để được hỗ trợ hoặc giải đáp thắc mắc.</p>
	  </div>

	  <div class="row contact-info">

		<div class="col-md-4">
		  <div class="contact-address">
			<i class="bi bi-geo-alt"></i>
			<h3>Địa chỉ</h3>
			<address>18 Lê Thiện Trị, Hoà Hải, Ngũ Hành Sơn, Đà Nẵng 550000, Vietnam</address>
		  </div>
		</div>

		<div class="col-md-4">
		  <div class="contact-phone">
			<i class="bi bi-phone"></i>
			<h3>Số điện thoại</h3>
			<p><a href="tel:+84364956400">+</a>+84364956400</p>
		  </div>
		</div>

		<div class="col-md-4">
		  <div class="contact-email">
			<i class="bi bi-envelope"></i>
			<h3>Email</h3>
			<p><a href="mailto:quanphan2k2@gmail.com">quanphan2k2@gmail.com</a></p>
		  </div>
		</div>

	  </div>

	  <div class="form">
		<form action="" method="post" role="form" class="php-email-form">
		  <div class="row">
			<div class="form-group col-md-6">
			  <input type="text" name="name" class="form-control" id="name" placeholder="Tên của bạn" required>
			</div>
			<div class="form-group col-md-6">
			  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
			</div>
		  </div>
		  <div class="form-group">
			<input type="text" class="form-control" name="subject" id="subject" placeholder="Tiêu đề" required>
		  </div>
		  <div class="form-group">
			<textarea class="form-control" name="message" rows="5" placeholder="Nội dung" required></textarea>
		  </div>
		  <div class="my-3">
			<div class="loading">Loading</div>
			<div class="error-message"></div>
			<div class="sent-message">Your message has been sent. Thank you!</div>
		  </div>
		  <div class="text-center"><button type="submit">Gửi tin nhắn</button></div>
		</form>
	  </div>

	</div>
  </section><!-- End Contact Section -->
  <!--/ Intro Single End /-->