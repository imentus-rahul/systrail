<section>
    <div class="kool-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="footer-info pt-3">
                        <div class="kool-copy-right text-white pb-2">
                            Copyright 2016 © Systrail Solutions. All Rights Reserved
                        </div>
                    </div>
                </div>
                <div class='col-lg-6 col-md-6 col-sm-6'>
                    <div class='kool-footer-social-info'>
                        <ul class="socal-icon d-flex pt-3 pb-3 justify-content-lg-end">
                            <li><a href="<?php echo FACEBOOK;?>" target="_blank"class="text-white"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo TWITTER;?>" target="_blank"class="text-white"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?php echo LINKDIN;?>" target="_blank" class="text-white"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="<?php echo INSTAGRAM;?>"  target="_blank" class="text-white"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="<?php echo GITHUB;?>" target="_blank" class="text-white"><i class="fab fa-github"></i></a></li>
                        </ul>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>

</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/all.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>

<script type="text/javascript">

    $('#contactUsForm').unbind().submit(function(e){
        e.preventDefault(); 
        let contactName = document.getElementById('contactName').value;
        let contactPhone = document.getElementById('contactPhone').value;
        let contactEmail = document.getElementById('contactEmail').value;
        let contactMessage = document.getElementById('contactMessage').value;  

        if(contactName == '') {
            document.getElementById('contactName').classList.add("error-input"); 
            return false;
        } else{
            document.getElementById('contactName').classList.remove("error-input"); 
        }


        if(contactPhone == '') {
            document.getElementById('contactPhone').classList.add("error-input"); 
            return false;
        } else{
            document.getElementById('contactPhone').classList.remove("error-input"); 
        }


        if(contactEmail == '') {
            document.getElementById('contactEmail').classList.add("error-input"); 
            return false;
        } else{
            document.getElementById('contactEmail').classList.remove("error-input"); 
        }


        if(contactMessage == '') {
            document.getElementById('contactMessage').classList.add("error-input"); 
            return false;
        } else{
            document.getElementById('contactMessage').classList.remove("error-input"); 
        }

         document.getElementById('successMessage').innerHTML = "**Thank you for submitting data, we will let you know soon.**";

         document.getElementById('contactName').value = "";
         document.getElementById('contactPhone').value = "";
         document.getElementById('contactEmail').value = "";
         document.getElementById('contactMessage').value = "";  
         setTimeout( () => {
             document.getElementById('successMessage').innerHTML = "";
         },5000) 

    });
    
</script>

</body>

</html>