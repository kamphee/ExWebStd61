<form action="?url=form_reg_u" method="post" class="form-horizontal panel panel-default">
  <div class="panel-heading">
    <h4>
      <span class="glyphicon glyphicon-pencil"></span>
      <?php echo page1;?>
    </h4>
  </div>
  <div class="panel-body">
    <?php
    /*
    แสดง errors (ถ้ามี)
    ดูคำอธิบายใน inc/form_errors.inc.php
    */
    require 'inc/message_errors.inc.php';
    ?>
    
	<div class="form-group <?php
    /*
    ถ้ามี key ชื่อ 'title_id' อยู่ใน array $FORM_ERRORS
    ให้เพิ่ม class 'has-error' เข้าไปใน <div> นี้
    */
    if (isset($FORM_ERRORS['title_id'])) {
      echo 'has-error';
    }
    ?>">
	
      <label for="title_idInput" class="col-sm-4 control-label">*คำนำหน้าชื่อ</label>
      <div class="col-sm-4">
        	  
		<select class="form-control" name="title_id">
				<option value="
			<?php echo htmlspecialchars($DATA['title_id'], ENT_QUOTES, 'UTF-8');?>"
          placeholder="คำนำหน้าชื่อ"
          spellcheck="false"
          class="form-control"
			">
			<?php if(!empty($DATA['title'])){ ?>
			     <?php echo $DATA['title']?>
			<?php }else{ echo "เลือกรายการ"; }?>	 
		</option>
		<?php 
		$qt="SELECT * FROM {$prefix}_title"; //
		$reckt = $mysqli->query($qt); // ทำการ query คำสั่ง sql
	  ?>
		<?php while($rsct=$reckt->fetch_object()){ ?>
			<option value="<?=$rsct->id?>">
			<?=$rsct->title ?>
			</option>
		<?php } ?>	
		</select>
		
      </div>
    </div>
	
	<div class="form-group <?php
    /*
    ถ้ามี key ชื่อ 'lname' อยู่ใน array $FORM_ERRORS
    ให้เพิ่ม class 'has-error' เข้าไปใน <div> นี้
    */
    if (isset($FORM_ERRORS['lname'])) {
      echo 'has-error';
    }
    ?>">
      <label for="lnameInput" class="col-sm-4 control-label">*ชื่อ</label>
      <div class="col-sm-4">
        <input
          type="text"
          id="lname"
          name="lname"
          value="<?php
          echo htmlspecialchars($DATA['lname'], ENT_QUOTES, 'UTF-8');
          ?>"
          placeholder="ชื่อ"
          spellcheck="false"
          class="form-control"
        >
      </div>
    </div>
	
	<div class="form-group <?php
    /*
    ถ้ามี key ชื่อ 'fname' อยู่ใน array $FORM_ERRORS
    ให้เพิ่ม class 'has-error' เข้าไปใน <div> นี้
    */
    if (isset($FORM_ERRORS['fname'])) {
      echo 'has-error';
    }
    ?>">
      <label for="fnameInput" class="col-sm-4 control-label">*นามสกุล</label>
      <div class="col-sm-4">
        <input
          type="text"
          id="fname"
          name="fname"
          value="<?php
          echo htmlspecialchars($DATA['fname'], ENT_QUOTES, 'UTF-8');
          ?>"
          placeholder="นามสกุล"
          spellcheck="false"
          class="form-control"
        >
      </div>
    </div>	

		<div class="form-group <?php
    /*
    ถ้ามี key ชื่อ 'dep_id' อยู่ใน array $FORM_ERRORS
    ให้เพิ่ม class 'has-error' เข้าไปใน <div> นี้
    */
    if (isset($FORM_ERRORS['dep_id'])) {
      echo 'has-error';
    }
    ?>">
	
      <label for="dep_idInput" class="col-sm-4 control-label">*แผนกวิชา</label>
      <div class="col-sm-4">
        	  
		<select class="form-control" name="dep_id">
				<option value="
			<?php echo htmlspecialchars($DATA['dep_id'], ENT_QUOTES, 'UTF-8');?>"
          placeholder="แผนกวิชา"
          spellcheck="false"
          class="form-control"
			">
			<?php if(!empty($DATA['dep'])){ ?>
			     <?php echo $DATA['dep']?>
			<?php }else{ echo "เลือกรายการ"; }?>	 
		</option>
		<?php 
		$qt="SELECT * FROM {$prefix}_dep"; //
		$reckt = $mysqli->query($qt); // ทำการ query คำสั่ง sql
	  ?>
		<?php while($rsct=$reckt->fetch_object()){ ?>
			<option value="<?=$rsct->id?>">
			<?=$rsct->dep ?>
			</option>
		<?php } ?>	
		</select>
		
      </div>
    </div>
	
<div class="form-group <?php
    /*
    ถ้ามี key ชื่อ 'email' อยู่ใน array $FORM_ERRORS
    ให้เพิ่ม class 'has-error' เข้าไปใน <div> นี้
    */
    if (isset($FORM_ERRORS['email'])) {
      echo 'has-error';
    }
    ?>">
      <label for="emailInput" class="col-sm-4 control-label">*อีเมลล์</label>
      <div class="col-sm-4">
        <input
          type="text"
          id="email"
          name="email"
          value="<?php
          echo htmlspecialchars($DATA['email'], ENT_QUOTES, 'UTF-8');
          ?>"
          placeholder="อีเมลล์"
          spellcheck="false"
          class="form-control"
        >
      </div>
    </div>	

<div class="form-group <?php
    /*
    ถ้ามี key ชื่อ 'tel' อยู่ใน array $FORM_ERRORS
    ให้เพิ่ม class 'has-error' เข้าไปใน <div> นี้
    */
    if (isset($FORM_ERRORS['tel'])) {
      echo 'has-error';
    }
    ?>">
      <label for="telInput" class="col-sm-4 control-label">*เบอร์โทร</label>
      <div class="col-sm-4">
        <input
          type="text"
          id="tel"
          name="tel"
          value="<?php
          echo htmlspecialchars($DATA['tel'], ENT_QUOTES, 'UTF-8');
          ?>"
          placeholder="เบอร์โทร"
          spellcheck="false"
          class="form-control"
        >
      </div>
    </div>	
	
    <div class="form-group <?php
    /*
    ถ้ามี key ชื่อ 'address' อยู่ใน array $FORM_ERRORS
    ให้เพิ่ม class 'has-error' เข้าไปใน <div> นี้
    */
    if (isset($FORM_ERRORS['address'])) {
      echo 'has-error';
    }
    ?>">
      <label for="addressInput" class="col-sm-4 control-label">*ที่อยู่</label>
      <div class="col-sm-4">
        <textarea
             id="address"
             name="address"
             rows="5"
             placeholder="ที่อยู่"
             spellcheck="false"
             class="form-control"
           ><?php
           echo htmlspecialchars($DATA['address'], ENT_QUOTES, 'UTF-8');
           ?></textarea>
      </div>
    </div>
	
    <div class="form-group <?php
    /*
    ถ้ามี key ชื่อ 'u_name' อยู่ใน array $FORM_ERRORS
    ให้เพิ่ม class 'has-error' เข้าไปใน <div> นี้
    */
    if (isset($FORM_ERRORS['u_name'])) {
      echo 'has-error';
    }
    ?>">
      <label for="u_nameInput" class="col-sm-4 control-label">*ชื่อผู้ใช้ระบบ</label>
      <div class="col-sm-4">
        <input
          type="text"
          id="u_name"
          name="u_name"
          value="<?php
          echo htmlspecialchars($DATA['u_name'], ENT_QUOTES, 'UTF-8');
          ?>"
          placeholder="ชื่อผู้ใช้ระบบ"
          spellcheck="false"
          class="form-control"
        >
      </div>
    </div>
	
	    <div class="form-group <?php
    /*
    ถ้ามี key ชื่อ 'u_pass' อยู่ใน array $FORM_ERRORS
    ให้เพิ่ม class 'has-error' เข้าไปใน <div> นี้
    */
    if (isset($FORM_ERRORS['u_pass'])) {
      echo 'has-error';
    }
    ?>">
      <label for="u_passInput" class="col-sm-4 control-label">*รหัสผ่านเข้าระบบ</label>
      <div class="col-sm-4">
        <input
          type="password"
          id="u_pass"
          name="u_pass"
          value="<?php
          echo htmlspecialchars($DATA['u_pass'], ENT_QUOTES, 'UTF-8');
          ?>"
          placeholder="รหัสผ่านเข้าระบบ"
          spellcheck="false"
          class="form-control"
        >
      </div>
    </div>

       <input
          type="hidden"
          id="u_type"
          name="u_type"
          value="user"
        >    
		
    <hr>
	         <div class="form-group">
        <div class="col-sm-2 col-sm-offset-4">
           <button type="submit" class="btn btn-primary btn-block">
		<?php if(@$_GET['show']=="show" && @$_GET['add']=="add"){ #แสดงค่าที่กด?>
		
			เพิ่มสมาชิกใหม่
			<input
          type="hidden"
          id="show"
          name="show"
          value="show"
        >   
			<input
          type="hidden"
          id="ins"
          name="ins"
          value="ins"
        >    
		<?php }else{?>	
		
			ทำการแก้ไข
			<input
          type="hidden"
          id="show"
          name="show"
          value="show"
        >   
			<input
          type="hidden"
          id="up"
          name="up"
          value="up"
        >    
		<?php }  ?>
        </button>

        </div>
        <div class="col-sm-2">
          <a class="btn btn-primary btn-block" href="?url=form_title">
            ยกเลิกการลบ
          </a>
        </div>
      </div>
  </div>
</form>