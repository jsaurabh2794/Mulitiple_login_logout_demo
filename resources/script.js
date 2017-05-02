$(document).ready(function(){

$('#n_error').hide();
$('#e_error').hide();
$('#m_error').hide();
$('#p_error').hide();
$('#rp_error').hide();


var p=true;
var p1=true;
var p2=true;
var p3=true;
var p4=true;
var p5=true;

$('#name').focusout(function(){

check_name();
});

$('#email').focusout(function(){
	check_email();

});
$('#mob').focusout(function(){
	check_mob();

});

$('#pass').focusout(function(){

check_pass();
});

$('#repass').focusout(function(){
check_repass();
});



function check_mob()
{
    var m=$("#mob").val().length;
    
    if(m<10)
    {
       $('#m_error').html("Mobile no should be correct.");
	$("#m_error").show();
	$("#m_error").fadeOut(5000); 
	p5=false;
    }
    else
    {
        p5=true;
    }
}


function check_name()
{

var n_l=$("#name").val().length;

if(n_l<5)
{
	$('#n_error').html("length should be greater than 5");
	$("#n_error").show();
	$("#n_error").fadeOut(5000);
     p=false;
    
}
else
{
    p=true;
}


}

function check_email()
{
    var n_l=$("#email").val();
    var pattern=/^([a-zA-Z0-9_.])+@([a-zA-Z])+\.([a-z])+/;
    if(!pattern.test(n_l))
    {
       $('#e_error').html("email formate should be in correct formate");
	$("#e_error").show();
	$("#e_error").fadeOut(5000); 
	p1=false;
    }
    else
    {
       p1=true; 
    }
   
}
function check_pass()
{
    var n_l=$("#pass").val().length;
   
    if($("#pass").val().length<1)
    {
       $('#p_error').html("required");
	$("#p_error").show();
	$("#p_error").fadeOut(5000); 
	p2= false; 
    }
    else if(n_l<6 || n_l>15)
    {
    $('#p_error').html("passsword should in between 6 to 15");
	$("#p_error").show();
	$("#p_error").fadeOut(5000); 
	p2= false;
    }
    else
    {
      p2= true;  
    }
    

    
}
function check_repass()
{
    var n_l=$("#repass").val();
    var n_l1=$("#pass").val();
    if(n_l1!=n_l)
    {
    	 $('#rp_error').html("passsword does not match");
	$("#rp_error").show();
	$("#rp_error").fadeOut(5000); 
	p3= false;
    }
    else
    {
        p3= true;
    }

}

$(document).ready(function(e){
   
                        $('#form').on('submit',function(e){
                            
                            e.preventDefault();
                            sub_check();
                        });
                        
                        
                    });
 
    $(document).ready(function(e){
        
        
        $('#login_form').on('submit',function(e){
                            e.preventDefault();
                            login_check();
                            
                        });
    });

    function sub_check()
    {

        check_name();
        check_email();
        check_mob();
        check_pass();
        check_repass();
        if (p == false || p1 == false || p2 == false || p3 == false || p5 == false)
        {
            return false;
        } else

        {
            sub();

        }

    }

    function sub()
    {
        $.ajax({
            type: 'post',
            url: 'common/login_signup.php?s=sign_true',
            data: {name: $('#name').val(), email: $('#email').val(), mob: $('#mob').val(), pass: $('#pass').val()},
            success: function (data)
            {

                if (data == "1")
                {
                    alert('Already Registered.');

                } else if (data == "2")
                {
                    window.location.href = 'http://localhost/myproject/MyDemoPHPProject/index.php?g=You have Successfully registered.&s=8190dd31df60f783ccec61a37633716c';
                } else
                {
                    alert('Something Error Occurred...')
                }
            }

        });
    }

function login_check()
{
  check_email();  
  check_pass();
  if(p1==false||p2==false)
  {
      return false;
  }
  else
  {
      $.ajax({
            type: 'post',
            url: 'common/login_signup.php?s=login',
            data: {email: $('#email').val(),pass: $('#pass').val()},
            success: function (data)
            {

                if (data == "1")
                {
                    window.location.href='http://localhost/myproject/MyDemoPHPProject/index.php?s=44383cc66d10d84fc41576d4dd71f0e5';

                } else if (data == "2")
                {
                    alert('Email or Password is incorrect.');
                } else if(data=="3")
                {
                    alert('You are not registered.');
                }
                else
                {
                    alert(data);
                }
            }

        });
      
      
      
      
  }
    
}




});