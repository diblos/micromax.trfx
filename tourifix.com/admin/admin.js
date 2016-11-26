	
	var t;var min = 15;
	var applicant_id=0;
	var updateflag = false;
	
$(document).ready(function() {
	create_navbar();
	//getapplicantlist();
});
			
var getapplicantlist = function(){
//if ($.jStorage.get("in")===false){window.location.href = 'login.html';};
		//p=$.jStorage.get("key");
		
		//$( "#dApplicants" ).empty().append('<li data-role="list-divider">Applicant List</li>');
		
		$.ajax({
            url: "data.php",
            //force to handle it as text
            dataType: "text",
			beforeSend: function() { $.mobile.loading('show'); }, //Show spinner
            complete: function() { $.mobile.loading('hide'); }, //Hide spinner
            success: function(data) {
            	 //alert(data);
				 
				$( "#dApplicants" ).empty().append('<li data-role="list-divider">Applicant List</li>');
				 
                var json = $.parseJSON(data);
                //now json variable contains data in json format
				var count = 0;
				
				$(json).each(function() {					
				
				  var li = $( '<li data-icon="carat-r" swatch="c">' );
				  var a = $( "<a/>" );
				  //a.attr("href",this.datalink + '?r=' + getRandomInt(10,10000));
				  a.attr("href",'#');
				  a.attr("onclick",'showdetails('+this.id+');return false;');
				  a.html('<span>'+this.fname+' '+this.lname+'</span><span class="ui-li-count ui-btn-up-b ui-btn-corner-all ui-body-inherit">'+((this.approved==='Y') ? 'Approved' : 'Not Approved')+'</span>');
				  li.append(a);
				  
				  $( "#dApplicants" ).append(li);
				});
				
				$('#dApplicants').listview( "refresh" );					
				
				//$('#dApplicants li a').click(function(){return false;});
				
				//$('#mainpage').trigger('create');
				
            },
           	error: function(x, t, m) {
		        if(t==="timeout") {
		            setTimeout(function(){alert("err:timeout");},1000);
		        } else {
		        	alert(x+' '+t+' '+m);
		            // setTimeout(function(){alert('err:'+t);},1000);
		        }
    		}
        });


}

var getcourselist = function(){
		
		$.ajax({
            url: "course.php",
            //force to handle it as text
            dataType: "text",
			beforeSend: function() { $.mobile.loading('show'); }, //Show spinner
            complete: function() { $.mobile.loading('hide'); }, //Hide spinner
            success: function(data) {
            	 //alert(data);
				 
				$( "#dCourses" ).empty().append('<li data-role="list-divider">Course List</li>');
				 
                var json = $.parseJSON(data);
                                  
				var count = 0;
				
				$(json).each(function() {					
				
				  var li = $( '<li data-icon="carat-r" swatch="c">' );
				  var a = $( "<a/>" );
				  //a.attr("href",this.datalink + '?r=' + getRandomInt(10,10000));
				  a.attr("href",'#');
				  a.attr("onclick",'showcoursedetails('+this.id+');return false;');
				  a.html('<span>'+this.coursename+'</span>');
				  li.append(a);
				  
				  $( "#dCourses" ).append(li);
				});
				
				$('#dCourses').listview( "refresh" );	
				
            },
           	error: function(x, t, m) {
		        if(t==="timeout") {
		            setTimeout(function(){alert("err:timeout");},1000);
		        } else {
		        	alert(x+' '+t+' '+m);
		            // setTimeout(function(){alert('err:'+t);},1000);
		        }
    		}
        });


}


var resend = function(){

	if($('input[name="radApp"]:checked').val()==='Y'){
		invalid('sent',false);
	}else{
		invalid('not approved',false);
	}
	
	
}
var showdetails = function(d){
		updateflag = false;
		$.ajax({
			method: "POST",
            url: "data.php",
			data: { o: d },
            dataType: "text",
			beforeSend: function() { $.mobile.loading('show'); }, //Show spinner
            complete: function() { $.mobile.loading('hide'); }, //Hide spinner
            success: function(data) {
            	 //alert(data);
				 //return false;
                var json = $.parseJSON(data);
                //now json variable contains data in json format                        
				var count = 0;
				
				$(json).each(function() {					
				
				applicant_id=this.applicant_id;
				
				$('#fnama').val(this.fname);
				$('#lnama').val(this.lname);
				$('#age').val(this.age);
				$('#nationality').val(this.nationality);
				$('#occupation').val(this.occupation);
				$('#add1').val(this.add1);
				$('#add2').val(this.add2);
				$('#zip').val(this.zip);
				$('#city').val(this.city);
				$('#state').val(this.state);
				$('#mobile').val(this.mobile);
				$('#email').val(this.email);
				$('#country').val(this.country);
				$('#passport').val(this.idno);
				$('#course_fee').val(this.fee);
				
				$('#eng_proficiency').val(this.eng_proficiency);
				$('#edu_level').val(this.edu_level);
				$('#prefered_course').val(this.prefered_course);
				
				var d =  new Date(this.join_date);
				
				$('#Field18-1').val(('0' + d.getDate()).slice(-2));
				$('#Field18-2').val(('0' + (d.getMonth()+1)).slice(-2));
				$('#Field18').val(d.getFullYear());
				
				if(this.gender==='F'){					
					$('input:radio[name="radGender"]').filter('[value="F"]').parent().find("label[for].ui-btn").click()
				}else{							
					$('input:radio[name="radGender"]').filter('[value="M"]').parent().find("label[for].ui-btn").click()
				}
				
				if(this.approved==='Y'){					
					$('input:radio[name="radApp"]').filter('[value="Y"]').parent().find("label[for].ui-btn").click()
				}else{							
					$('input:radio[name="radApp"]').filter('[value="N"]').parent().find("label[for].ui-btn").click()
				}
				
				if(this.Base64Data){$('#button_attachment').show();}else{$('#button_attachment').hide();};
				$('#attachimg').attr( "src", this.Base64Data );
				
				});
				$.mobile.changePage("#pagedetail", { transition: "slide",role: "page" });
				
            },
           	error: function(x, t, m) {
		        if(t==="timeout") {
		            setTimeout(function(){alert("err:timeout");},1000);
		        } else {
		        	alert(x+' '+t+' '+m);
		            // setTimeout(function(){alert('err:'+t);},1000);
		        }
    		}
        });
}

var showcoursedetails = function(d){
	
		$.ajax({
			method: "POST",
            url: "course.php",
			data: { o: d },
            dataType: "text",
			beforeSend: function() { $.mobile.loading('show'); }, //Show spinner
            complete: function() { $.mobile.loading('hide'); }, //Hide spinner
            success: function(data) {
            	 //alert(data);
				 //return false;
                var json = $.parseJSON(data);
                //now json variable contains data in json format                        
				var count = 0;
				
				$(json).each(function() {					
				
					$('#course_name').html('COURSE: '+this.coursename);
					$('#fee_1').val(this.fee_1);
					$('#fee_2').val(this.fee_2);
					$('#fee_3').val(this.fee_3);
					$('#fee_4').val(this.fee_4);
					$('#fee_5').val(this.fee_5);
					$('#fee_6').val(this.fee_6);
					$('#fee_7').val(this.fee_7);
					$('#fee_8').val(this.fee_8);
					$('#fee_9').val(this.fee_9);
					$('#fee_10').val(this.fee_10);
					$('#fee_11').val(this.fee_11);
					$('#fee_12').val(this.fee_12);
					
					var id=this.id;
					
					$('#updatefee_btn').unbind('click');
					$('#updatefee_btn').click(function(){setfee(id);return false;});
					
				});
				$.mobile.changePage("#pagecoursedetail", { transition: "slide",role: "page" });
				
            },
           	error: function(x, t, m) {
		        if(t==="timeout") {
		            setTimeout(function(){alert("err:timeout");},1000);
		        } else {
		        	alert(x+' '+t+' '+m);
		            // setTimeout(function(){alert('err:'+t);},1000);
		        }
				$('#updatefee_btn').unbind('click');
				$('#updatefee_btn').click(function(){return false;});
    		}
        });
}

var setapproval = function(){
	updateflag = true;
	var approval = $('input[name="radApp"]:checked').val();
		
			try{
			var durl = '../process/';
			
			var posto = { o:'apv', applicant_id:applicant_id, approved:approval}
						
			//alert(JSON.stringify(posto));			
			//return false;
			
			$.ajax({
			method: "POST",
            url: durl,
			data: posto,
            dataType: "text",
			beforeSend: function() { $.mobile.loading('show'); }, //Show spinner
            complete: function() { $.mobile.loading('hide'); }, //Hide spinner
            success: function(data) {
            	 
				//$('#display').html(data);
				invalid(data,false);
				
            },
           	error: function(x, t, m) {
		        if(t==="timeout") {
		            setTimeout(function(){$('#display').html("err:timeout");},1000);
		        } else {
		        	//$('#display').html(x+' '+t+' '+m);		            
					alert(x+' '+t+' '+m);
		        }
    		}
        });
	
		}catch(err){
			alert(err.message);
		}
	
}

var setfee = function(id){
		
			try{
			var durl = 'process.php';
			
			var posto = { o:'fee', id:id, fee_1:$('#fee_1').val(),fee_2:$('#fee_2').val(),fee_3:$('#fee_3').val(),fee_4:$('#fee_4').val(),fee_5:$('#fee_5').val(),fee_6:$('#fee_6').val(),fee_7:$('#fee_7').val(),fee_8:$('#fee_8').val(),fee_9:$('#fee_9').val(),fee_10:$('#fee_10').val(),fee_11:$('#fee_11').val(),fee_12:$('#fee_12').val()}
						
			//alert(JSON.stringify(posto));			
			//return false;
			
			$.ajax({
			method: "POST",
            url: durl,
			data: posto,
            dataType: "text",
			beforeSend: function() { $.mobile.loading('show'); }, //Show spinner
            complete: function() { $.mobile.loading('hide'); }, //Hide spinner
            success: function(data) {
            	 
				invalid(data,false);
				
            },
           	error: function(x, t, m) {
		        if(t==="timeout") {
		            setTimeout(function(){$('#display').html("err:timeout");},1000);
		        } else {
		        	//$('#display').html(x+' '+t+' '+m);		            
					alert(x+' '+t+' '+m);
		        }
    		}
        });
	
		}catch(err){
			alert(err.message);
		}
	
}

var back2list = function(){
	if(updateflag){getapplicantlist()};
	$.mobile.changePage("#pageone", { transition: "slide",role: "page",reverse:true  });
}
var login = function(){
	if(($("#uid").val()==='admin')&&($("#pwd").val()==='admin')){
	getapplicantlist();
	$.mobile.changePage("#pageone", { transition: "slide",role: "page"});
	}else{
		alert('invalid login!');
	}
}

var logout = function(){
	$.mobile.changePage("#pagelogin", { transition: "slide",role: "page",reverse:true});	
}

var OK1= function(){$('#fOKdialog').dialog( 'close');return false;};
var OK2= function(){
								$.mobile.changePage("#customerpage", { transition: "slidedown",role: "page" });
								return false;
								};
function invalid(smsg,x){
		var icon = '';//'<i class="fa fa-exclamation-triangle fa-1x"></i>&nbsp;';
		$('#fOKdialog p').css('display','block').html(icon+smsg);
		$.mobile.changePage("#fOKdialog", { transition: "slidedown",role: "dialog" });
				
		switch(x)
		{
			case true:
				$('#fOKdialog button').unbind('click');
				$('#fOKdialog button').click(OK2);
				break;
			case false:
				$('#fOKdialog button').unbind('click');
				$('#fOKdialog button').click(OK1);
				break;
			default:
				$('#fOKdialog button').unbind('click');
				//$('#fOKdialog button').click(function(){navfunc('#'+x);$.mobile.changePage("#"+x, { transition: "slidedown",role: "page" });return false;});				
		}

}

var create_navbar = function(){
                var json = [
    {
        "datalink": "pageone",
        "dataicon": "user",
        "datatext":"Applicant",
        "datatransition":"slideup",
        "dataview":"all"
    },
    {
        "datalink": "pagetwo",
        "dataicon": "calendar",
        "datatext":"Courses",
        "datatransition":"slideup",
        "dataview":"all"
    },
    {
        "datalink": "customerpage",
        "dataicon": "star",
        "datatext":"Customer",
        "datatransition":"slideup",
        "dataview":"none"
    },    
    {
        "datalink": "nav.html",
        "dataicon": "search",
        "datatext":"Nav",
        "datatransition":"slideup",
        "dataview":"none"
    }
];
                //now json variable contains data in json format                        
				var count = 0;
				var ul = $( "<ul/>" );
				$(json).each(function() {					
				if ((this.dataview=='all')||((this.dataview=='admin'))){
				  var li = $( "<li/>" );
				  var a = $( "<a/>" );
				  
				  a.attr("href",'#' + this.datalink);
				  a.attr("data-icon",this.dataicon);
				  a.attr("data-transition",this.datatransition);
				  
				  if (count===0){ a.attr("class","ui-btn-active");count++;};
				  if (this.datalink=='pagetwo'){a.attr("onclick","navfunc(this);getcourselist();");}else{a.attr("onclick","navfunc(this);");};
				  
				  a.html(this.datatext);
				  li.append(a);
				  ul.append(li);

				  $('#'+this.datalink+' div a[href="."]').hide();

				}
				});

				$( ".nav-bar" ).append(ul);
				$( ".nav-bar" ).offsetHeight; // no need to store this anywhere, the reference is enough
				//$('#pageone').trigger('create');
}

var navfunc = function (ob){
	$( ".nav-bar ul li a" ).removeClass( "ui-btn-active" );
	$( ".nav-bar ul li a[href$='#" + ob.toString().split('#')[1] + "']" ).addClass( "ui-btn-active" );	
}