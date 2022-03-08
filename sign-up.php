<link rel='stylesheet' href='components/styles/css/sign.css'>
<link rel='stylesheet' href='components/styles/css/material-design-iconic-font.css'>

<div class="wrapper">
    <form action="sign-up">
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
            </section>

            <h4></h4>
            <section>
            <h1 style='text-align:center;margin-bottom: 50px;'>Fill up this form to Sign Up</h1>
                <div class="grid">
                    <div class="row">
                        <a href="#" class="grid-item"
                            style="background-image: url(https://colorlib.com/etc/bwiz/colorlib-wizard-6/images/programming-bg.jpg);">
                            <div class="inner">
                                <img src="https://colorlib.com/etc/bwiz/colorlib-wizard-6/images/programming.png"
                                    alt="">
                                <span>Programming</span>
                            </div>
                        </a>
                        <a href="#" class="grid-item"
                            style="background-image: url('https://colorlib.com/etc/bwiz/colorlib-wizard-6/images/research-bg.jpg');">
                            <div class="inner">
                                <img src="https://colorlib.com/etc/bwiz/colorlib-wizard-6/images/research.png" alt="">
                                <span>Research</span>
                            </div>
                        </a>
                        <a href="#" class="grid-item"
                            style="background-image: url('https://colorlib.com/etc/bwiz/colorlib-wizard-6/images/teacher-bg.jpg');">
                            <div class="inner">
                                <img src="https://colorlib.com/etc/bwiz/colorlib-wizard-6/images/teacher.png" alt="">
                                <span>Teacher</span>
                            </div>
                        </a>
                    </div>
                    <div class="row">
                        <a href="#" class="grid-item" style="background-image: url('images/tour-guide-bg.jpg');">
                            <div class="inner">
                                <img src="https://colorlib.com/etc/bwiz/colorlib-wizard-6/images/tour-guide.png" alt="">
                                <span>Tour Guide</span>
                            </div>
                        </a>
                        <a href="#" class="grid-item"
                            style="background-image: url('https://colorlib.com/etc/bwiz/colorlib-wizard-6/images/business-bg.jpg');">
                            <div class="inner">
                                <img src="https://colorlib.com/etc/bwiz/colorlib-wizard-6/images/business.png" alt="">
                                <span>Business</span>
                            </div>
                        </a>
                        <a href="#" class="grid-item"
                            style="background-image: url('https://colorlib.com/etc/bwiz/colorlib-wizard-6/images/artist-bg.jpg');">
                            <div class="inner">
                                <img src="https://colorlib.com/etc/bwiz/colorlib-wizard-6/images/artist.png" alt="">
                                <span>Artist</span>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <h4></h4>
            <section>
                <div class="form-row">
                    <div class="form-holder">
                        <input type="text" placeholder="Street Name" class="form-control">
                    </div>
                    <div class="form-holder">
                        <input type="text" placeholder="Street Number" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-holder">
                        <input type="text" placeholder="City" class="form-control">
                    </div>
                    <div class="form-holder">
                        <input type="text" placeholder="Country" class="form-control">
                    </div>
                </div>
            </section>

            <h4></h4>
            <section>
                <div class="form-row">
                    <div class="form-holder">
                        <input type="text" placeholder="Street Name" class="form-control">
                    </div>
                    <div class="form-holder">
                        <input type="text" placeholder="Street Number" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-holder">
                        <input type="text" placeholder="City" class="form-control">
                    </div>
                    <div class="form-holder">
                        <input type="text" placeholder="Country" class="form-control">
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