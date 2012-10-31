<div id="contact" class="white_content">
  <div class="contactus">
    <div class="contact-head">
      <div class="head">
        <p>Contact us</p>
      </div>
    </div>
    <div class="contact-forme">
    <div class="forme">
    <div class="form-left">
    <form  id="contact-form" action="sendmail.php" method="post" enctype="text/plain">
      First Name<img src="<?php bloginfo("template_url"); ?>/images/form-required.png" width="7" height="7"/><br />
      <div class="input" >
        <input  id="name" type="text" name="name" style="border:none;" />
      </div>
      <br />
      Company<br />
      <div class="input" >
        <input id="company" type="text" name="company"  style="border:none" />
      </div>
      <br />
      Telephone<br />
      <div class="input" >
        <input type="text" name="Telephone"  style="border:none" />
      </div>
      <br />
      <br />
      </div>
      <div class="form-right"></div>
      <div class="form-middle"> Last Name<img src="<?php bloginfo("template_url"); ?>/images/form-required.png" width="7" height="7"/><br />
        <div class="input" >
          <input id="name" type="text" name="name" style="border:none" />
        </div>
        <br />
        Website<br />
        <div class="input" >
          <input type="text" name="Website" style="border:none"/>
        </div>
        <br />
        Email<img src="<?php bloginfo("template_url"); ?>/images/form-required.png"  width="7" height="7"/><br />
        <div class="input" >
          <input id="Email" type="text" name="Email" style="border:none" />
        </div>
      </div>
      </div>
      </div>
      <div class="text">
      <div class="textarea">
      Message
      <div class="input" >
      <textarea id="txt" rows="8" cols="60" style="border:none"  > </textarea>
    </form>
  </div>
</div>
</div>
<div class="contact-submit">
  <div class="submit">
      <input class="submit-img"  name="submit"  />
  </div>
</div>
</div>
<div class="close"> 
<a href = "javascript:void(0)" onclick ="closebox('contact')">
  <div class="close-img"></div>
</a>
</div> 
</div>
<div id="fade" class="black_overlay"></div>