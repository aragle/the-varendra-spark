<link rel='stylesheet' href='components/styles/css/sign.css'>
<link rel='stylesheet' href='components/styles/css/material-design-iconic-font.css'>

<div class="wrapper">
    <form method="get" action="sign-up">
        <div id="wizard">
            <h4></h4>
            <section>
                <h1 style='text-align:center;margin-bottom: 50px;'>Fill up this form to Sign Up</h1>
                <div class="form-header">
                    <div class="form-group">
                        <div class="form-holder active">
                            <input type="text" placeholder="First Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-holder">
                            <input type="text" placeholder="Last Name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-holder">
                    <input type="text" placeholder="Student ID" class="form-control">
                </div>
                <div class="form-holder">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-header">
                    <div class="form-group">
                        <div class="form-holder">
                            <input type="password" placeholder="Create a password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-holder">
                            <input type="repassword" placeholder="Enter password again" class="form-control">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </form>
</div>

<script src="https://colorlib.com/etc/bwiz/colorlib-wizard-6/js/jquery-3.3.1.min.js"></script>
<script src="https://colorlib.com/etc/bwiz/colorlib-wizard-6/js/jquery.steps.js"></script>

<script>
$(function(){
	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        onStepChanging: function (event, currentIndex, newIndex) { 
            if ( newIndex >= 1 ) {
                $('.actions ul').addClass('actions-next');
            } else {
                $('.actions ul').removeClass('actions-next');
            }
            return true; 
        },
        labels: {
            finish: "Finish",
            next: "Continue",
            previous: "Back"
        }
    });
    // Custom Steps 
    $('.wizard > .steps li a').click(function(){
    	$(this).parent().addClass('checked');
		$(this).parent().prevAll().addClass('checked');
		$(this).parent().nextAll().removeClass('checked');
    });
    // Custom Button Jquery Step
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    });
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    });
    // Input Focus
    $('.form-holder').delegate("input", "focus", function(){
        $('.form-holder').removeClass("active");
        $(this).parent().addClass("active");
    });
});
</script>