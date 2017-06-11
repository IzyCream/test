<style>
    html, body { margin: 0; padding: 0; }
</style>

<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" style="background-color: #aeaeae;">
    <tbody>
        <tr>
            <td>
                <table width="640" cellpadding="0" cellspacing="0" border="0" align="center">
                    <thead>
                        <tr>
                            <td style="border:none; border-top:3px solid #0a4868; background-color:#88c9ed; padding: 30px;">
                                <a href="<?php echo base_url(); ?>" target="_blank" style="display:block; text-align:center; border:none; outline:0;">
                                    <img src="<?php echo base_url(); ?>assets/imgs/logo.png"  />
                                </a>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border:none; background-color:#88c9ed; padding: 30px;">
                                <p style="color: #456;font-family: helvetica, arial, sans-serif;font-size: 18px;line-height: 1.4;padding: 0;">
                                <div style="padding-bottom:5px;">
                                    <label style="width:200px;display:inline-block;">Subject</label>
                                    <span><?php echo ': ' . $Subject; ?></span>
                                </div>
                                <div style="padding-bottom:5px;">
                                    <label style="width:200px;display:inline-block;">FullName</label>
                                    <span><?php echo ': ' .$FirstName.' '.$LastName; ?></span>
                                </div>
                                <div style="padding-bottom:5px;">
                                    <label style="width:200px;display:inline-block;">Telephone</label>
                                    <span><?php echo ': ' . $Telephone; ?></span>
                                </div>
                                <div style="padding-bottom:5px;">
                                    <label style="width:200px;display:inline-block;">Email</label>
                                    <span><?php echo ': ' . $Email; ?></span>
                                </div>
                                <div style="padding-bottom:5px;">
                                    <label style="width:200px;display:inline-block;">Project</label>
                                    <span><?php echo ': ' .$Project; ?></span>
                                </div>
                                <div style="padding-bottom:5px;">
                                    <label style="width:200px;display:inline-block;">House Number</label>
                                    <span><?php echo ': ' .$HouseNumber; ?></span>
                                </div>
                                <div style="padding-bottom:5px;">
                                    <label style="width:200px;display:inline-block;">Message</label>
                                    <span><?php echo ': ' .$Message; ?></span>
                                </div>
                                </p>
                            </td>
                        </tr>
                    </tbody>
     
                </table>
            </td>
        </tr>
    </tbody>
</table>
