<div id="service">
    <div class="bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>ดูแลลูกค้า</h1>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="title">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 ">
                    <div class="bg-title">
                        <h1><img src="<?php echo base_url('assets/imgs/mail.svg') ?>" alt=""> กรอกข้อมูลเพื่อส่งรายละเอียด</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    
    
    <div class="container">
        <div class="row">
            <?php echo form_open('service/send', array('id' => 'frm_register', 'class' => 'form', 'role' => 'form')); ?>
                <?php if ($process != ""): ?>
                <div class="col-xs-12">
                    <div class="process">ขอบคุณค่ะ ทางเราได้รับข้อมูลของท่านแล้ว</div>
                </div>
                <?php endif ?>
                <div class="col-xs-12 col-md-3">
                    <div class="formgroup" id="colorSubject">
                        <div class="label-drop" id="labelSubject">กรุณาเลือกหัวข้อ</div>
                        <select id="Subject" name="Subject" class="dropdown"
                        data-validation="required" data-validation-error-msg="กรุณาเลือกหัวข้อ"
                        onchange="changeColor('Subject')">
                            <option value="" class="label">กรุณาเลือกหัวข้อ</option>
                            <?php foreach ($subjects->result_array() as $key => $subject): ?>
                            <option value="<?php echo $subject['title']?>" <?php echo ($sj==$subject['slug'])? "selected" : ""; ?>><?php echo $subject['title']?></option>
                            <?php endforeach; ?>
                        </select>
                        <div id="errorSubject"></div>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="col-xs-12 col-md-3">
                    <div class="formgroup">
                        <input type="text" id="FirstName" name="FirstName" data-validation="length" data-validation-length="min1" data-validation-error-msg="กรุณากรอกชื่อ"/>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>ชื่อ</label>
                    </div>
                </div>

                <div class="col-xs-12 col-md-3">
                    <div class="formgroup">
                        <input type="text" id="LastName" name="LastName" data-validation="length" data-validation-length="min1" data-validation-error-msg="กรุณากรอกนามสกุล"/>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>นามสกุล</label>
                    </div>
                </div>

                <div class="col-xs-12 col-md-3">
                    <div class="formgroup">
                        <input type="text" id="Email" name="Email" data-validation="email" data-validation-error-msg="กรุณากรอกอีเมล"/>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>อีเมล</label>
                    </div>
                </div>

                <div class="col-xs-12 col-md-3">
                    <div class="formgroup">
                        <input type="text" id="Telephone" name="Telephone" data-validation="number" data-validation-allowing="float" maxlength="10"  data-validation-error-msg="กรุณากรอกเบอร์โทรศัพท์"/>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>เบอร์โทรศัพท์</label>
                    </div>
                </div>

                <div class="clear"></div>
                <!-- left-->
                <div class="left">
                    <div class="col-xs-12">
                        <div class="formgroup" id="colorProject">
                            <div class="label-drop" id="labelProject">ชื่อโครงการ</div>
                            <select id="Project" name="Project" class="dropdown"
                            data-validation="required" data-validation-error-msg="กรุณาเลือกโครงการ"
                            onchange="changeColor('Project')">
                                <option value="" class="label">ชื่อโครงการ</option>
                                <?php foreach ($projectdetails->result_array() as $key => $projectdetail): ?>
                                <option value="<?php echo $projectdetail['title']?>"><?php echo $projectdetail['title']?></option>
                                <?php endforeach; ?>
                            </select>
                            <div id="errorProject"></div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <div class="formgroup">
                            <input type="text" id="HouseNumber" name="HouseNumber" data-validation="length" data-validation-length="min1" data-validation-error-msg="กรุณากรอกที่อยู่"/>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>บ้านเลขที่</label>
                        </div>
                    </div>
                </div>
                <!-- end left-->
                <!-- right-->
                <div class="right">
                    <div class="col-xs-12">
                        <div class="formgroup">
                            <textarea name="Message" id="Message"></textarea>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>ข้อความ</label>
                        </div>
                    </div>
                </div>
                <!-- end right-->

                <div class="clear"></div>

                <div class="col-xs-12">
                    <div class="col-md-10 col-xs-12">
                        <div class="g-recaptcha" data-sitekey="6Lerrx0UAAAAAJLLTCAQOoob7rXYBMrbYmGL4LDG" style="float: right;"></div>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <input type="submit" class="submit" value="SEND" />
                    </div>
                </div>

                <div class="clear"></div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<link href="<?php echo base_url('assets/css/animate.css'); ?>" rel="stylesheet">

<script>
    function changeColor(type){
        $('#color'+type+' .selected').css({'color':'#3f3f3f','font-size':'15px','font-weight':'bold','border-bottom':'1px solid #aeaeae'})
        $('#error'+type).hide()
    }
</script>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>