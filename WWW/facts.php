<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>景区概况</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<script src="js/jquery-3.3.1.js" type="text/javascript" charset="utf-8"></script>

		<script src="js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/echarts.js" type="text/javascript"></script>
		<style>
			.header a{
		    	color:#737272;
		    }
		  
				body {  overflow-x: hidden; overflow-y: auto;
						 }
			             .quan{
			      	 overflow-x: hidden;
			      	 height:100%;
			      }
           .xian{
        	display:none!important;
        }
			
			.col-md-6,.col-md-8,.col-md-9{
				padding: 0;
				margin: 0;
			}
			
				*{
				padding:0;
				margin:0;
			}
		   .header{
		   	padding:0!important;	
		   	position:relative
		   }
		   .header .logo{
		      background: url(img/logo.png) no-repeat 0px 4px;
			    width: 20px;
			    height: 25px;
			    padding-top: 2px;
			    margin-right:20px;
		   }
		   
		
		   
		    .header .header1{
                 position: fixed;
                 width:100%;
                
		    	display: flex;
		    	flex-direction: row;
		    	align-items: center;
		    	padding:15px 15px 3px 38px;
		    	z-index: 55;
		    	
		    }
		  
		    .pull-right{
		    	border:3px solid #e5e5e5;
		    	padding:10px 37px;
		    	border-radius: 5px;
		    	
		    }
		    .header ul{
		    	 position: absolute;
		    	 z-index: 55;
		    	 left: 12%;
		    	 right: 12%;
		    	 border:1px solid #fff;
		    	 top:490px;
		    	 color:#fff;
		    	 width:76%;
		    }
		    .header .left1,.header .right1{
		    	display: block;
		    	padding-top: 17px;
		    	padding-bottom: 45px;
		    	font-size: 22px;
		    	
		    	
		    }
		    .header li.pull-left,.header li.pull-right{
		    	width: 50%;
		    	border-style: none;
		    	padding-top: 35px;
		    	padding-left: 45px;
		    	padding-bottom: 0;
		    	padding-right: 0;
		    	float: left;
		    	
		    }
		     .header li.pull-left{
		     border-right: 1px solid #fff;
		     	
		     }
		     .header ul li .jian{
		     	background: url(img/baijian.png) no-repeat 0 10px;
		     	height:35px;
		     	
		     	width:25px;
		     	float: right;
		     	
		     }
		      .header .yi{
		    	width:48%;
		    	display: inline;
		    	text-align: center;
		    	font-size: 18px;
		    	padding:0 35px;
		    }
		     .header .yi .active{
		    	font-size: 22px;
		    	color: #0a78d6;
		    }
		    .header .bottom{
		    	position: absolute;
		    	top:35%;
		    	left:50%;
		    	margin-left: -27px;
		    	
		    }
		    .header #menu3{
        	opacity: 0.5;
        	position: absolute;
        	top:20px;
        	left:-77px;
        	font-size: 30px;
        	padding-top: 35px;
        	padding-left: 120px;
        	
        }
        .header #menu3 a{
        	line-height: 64px;
        }
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    .content {
		    	margin-top: 135px;
		    	padding:0!important
		    	
		    }
		    .content .title{
		    	font-size:32px;
		    }
			.content .title1{
		    	font-size:14px;
		    }
		    .content .graph{
		    	font-size: 16px;
		    	line-height: 25px;
		    	margin-top: 40px;letter-spacing: 1px;
		    	
		    }
		       .content .name{
		       	background: url(img/shu1.jpg) no-repeat 100% 250px;
		       	padding-bottom: 200px;
		       }
		       .content .name .right{
		       	padding-left:24px;
		       }
		       .content .name .img-responsive{
		       	height:400px;
		       }
		       .content .row{
		       	margin: 0;
		       }
		       .content .san .da{
		       	width:150px;
		       	text-align: center;
		       	margin: auto;
		       	display: block;
		       	font-size: 16px;
		       	font-weight: bolder;
		       }
		        .content .san .pull-right{
		        	border-style: none;
		        	padding:0;
		        	font-size: 16px;
		        		       	font-weight: bolder;
		        		       	position: relative;
		        		       	top:-20px
		        }
		        .content .san img{
		        	display: block;
		        	
		        	width:68%;
		        }
		        .content .san{
		        	background: url(img/15.png) no-repeat 3%;
		        	background-size:98% ;
		        	position: relative;
		        	z-index: 6666;
		        }
		        .content .san span{
		        	width:54%;
		        	margin-left: 7%;
		        	margin-top: 25px;
		        	text-align: center;
		        	display: inline-block;
		        	font-size: 16px;
		        	letter-spacing: 2px;
		        }
		        .content .san span.title{
		        	margin-top: 0;
		        	margin-bottom: 40px;
		        	font-size: 28px;
		        }
		        
		        
		         .content .san ul li{
		         	float: left;
		         	width:25%;
		         	
		        }
		         .content .san ul{
		       width:280%;
		       padding-left:25%;
		       position: relative;
		       overflow: hidden;
		      
		         }
		         .content .san .left{
		         width:85px;
		         	position: absolute;
		         	left:0;
		         	height:50px;
		         	margin-left:2.3%;
		         	top:37%;
		         		z-index: 555;
		         }
		         .content .san .right{
		         	 width:85px;
		         		top:37%;
		         	position: absolute;
		         	left:86%;
		         	height:50px;
		         	z-index: 555;
		         }
		            .content .tong{
		            	background: url(img/lu.jpg) no-repeat;
		            	background-size:100% ;
		            	height:700px;
		            	padding: 1px;
		            	margin-top: 75px;
		            }
		         
		         
		         .content .tong1{
		         	width:37%;
		         	margin: 0 auto;
		         	text-align: center;
		         	margin-top: 115px;
		         }
		         .content .tong1 .tongtian{
		         	font-size: 54px;
		         	letter-spacing: 2px;
		         	margin-top: -20px;
		         }
		         .content .tong1 .qing{
		         	font-size: 36px;
		         	  	letter-spacing: 2px;
		         	  	  	line-height: 70px;
		         }
		         .content .tong1 .gou{
		         	font-size: 42px;
		         	  	letter-spacing: 2px;
		         	  	line-height: 70px;
		         }
		         .content .tong1 .fa{
		         	font-size: 36px;
		         	margin-top:40px;
		         	border:3px solid #999898;
		         	padding: 25px 75px;
		         }
		         
		        
		        
		        
		        
		        
		        
		        .footer{
		      margin:0 auto!important;
		    margin-top: 135px;
		    	display: flex;
		    	flex-direction: column;
		    	align-items: center;
		    	text-align: center;
		    	color:#555454;
		    	
		    }
		      .footer .si{
		      	display: inline-block;
		      	height:105px;
		      
		      	font-size: 12px;
		      	width:65px;
		      	padding-top: 80px;
		      }
		      .footer .yao{
		      	font-size: 50px;
		    
		      }
		      .footer .ru{
		      	width:42%;
		      	margin-top: 15px;
		      	line-height: 20px;
		      	letter-spacing: 2px;
		      	margin-bottom: 68px;
		      }
		      .footer .kai{
		      font-size: 32px;
			    padding: 25px 50px;
			    padding-right: 75px;
			    border: 3px solid #dbd9d9;
			    background: url(img/jian.png) no-repeat 270px;
			    background-size: 25px 15px;
			    margin-bottom: 250px;
		      }
		      .footer1{
		       	width:75%;
		       	margin: 0 auto;
		       	display: flex;
		       	flex-direction: column;
		       	align-items: center;
		       	background: url(img/xuehua1.png) no-repeat;
		       }
		       .footer1 .da{
		       	display: block;
		       	background: url(img/da.png) no-repeat;
		       	width: 95px;
		       	height: 80px;
		       }
		       .footer1 ul li{
		       	width:33%;
		       	height:120px;
		       	line-height: 120px;
		       	text-align: center;
		       	border-left:3px solid #dcdcdc;
		       	box-sizing: border-box;
		       	font-size: 16px;
		       	
		       }
		       .footer1 ul{
		       	border-right:3px solid #dcdcdc ;
		       	border-top: 3px solid #dcdcdc;
		       	border-bottom: 3px solid #dcdcdc;
		       	width: 75%;
		       	margin-top: 34px;
		       	margin-bottom: 140px;
		       	
		       
		       }
		       .footer1 img{
		       	padding-right: 20px;
		       }
		        .xian{
        	display:none!important;
        }
          .header .yi .active{
		    	font-size: 22px;
		    	color: #0a78d6!important;
		    };
		</style>
		
		
	</head>
	<body>
		<div class="quan">
		<div class="header  container-fluid clearfix">
		
		
		<div class="header1">
			<span class="pull-left logo"></span>
			<span class="pull-left">
				<div  class="dropdown">
        <a id="drop6" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 				aria-expanded="false">
       导航
         
        </a>
           <?php include('public/left.php');?>
      </div></span>
			<div class="yi center-block">
				<span  class="yi center-block "><a href="" class="active">景区概况</a></span>
				<span  class="yi center-block"><a href="mingfeng.php">民风民俗</a></span>
				<span  class="yi center-block"><a href="zhangquwenhua.php">藏区文化</a></span>
				<span  class="yi center-block"><a href="jingqujiesao.php">景区介绍</a></span>
			</div>
			
			
		
			<span class="pull-right"><a href="">联系我们</a></span>
		</div>
		
		<img src="img/xia.png" class="bottom" alt="" />
		
		<img src="img/facts.jpg" class="bei img-responsive"/>
	
	</div>
	
	<div class="content container-fluid">
	<div class="row name">
	
		<div class="col-md-5 col-md-offset-1">
			<img src="img/fang.jpg"class="img-responsive" width="100%"  alt="" />
		</div>
		<div class="col-md-6 right">
			<div class="title">
				达瓦更扎
				<span  class="title1">Dagengzha</span>
			</div>
			<div class="row">
			<div class="graph col-md-8">达瓦更扎景区位于四川省雅安市宝兴县硗碛藏族乡嘎日村境内，景区面积近50平方公里，云顶最高海拔3866米，属于邛崃山                  				脉，地势北高南低，被誉为“亚洲通达最好的360°观景平台”。</div>
			<div class="graph col-md-8">达瓦更扎在藏语中意为“美丽的神山”。
				景区既可环顾北面的四姑娘山、南面的帕格拉神山、西面的贡嘎
				群峰、东面的峨眉山等名山。</div>
		</div>
		</div>
		
	</div>
	   <div class="row san">
	  	     	<span class="left" >
	  	     		<img  src="img/16.png" alt="" id="left" />
	  	     	</span>
       	<span class="right" id="right">
       		<img  src="img/right.png" alt=""  />
       	</span>
       <ul class="list-unstyled clearfix " id="lun">
       	
  
	   	
       	<li> 	<span class="title">达瓦更扎山脉 </span>
       		<img src="img/xuesan.jpg" alt="" />
       		<span>兴奋的来到美丽的神山附近，有精神和有歌曲的地方。好好去感受自然的魅力，站在一块平坦的山脚，远远的看着
       			雪山，周边连绵起伏的山脉，</span>
       	</li>
       		<li>
       			<span class="title">云海</span>
       		<img src="img/22.jpg" alt="" />
       		<span>车子行驶在路上，刚好遇上清晨，云城挺厚的，但也阻挡不了日出的光芒，走在公路上，周边的环境甚是优美，随手拍的照  					片，发朋友圈都是很美的。</span>
       	</li>
       	<li>
       			<span class="title">云海</span>
       		<img src="img/22.jpg" alt="" />
       		<span>车子行驶在路上，刚好遇上清晨，云城挺厚的，但也阻挡不了日出的光芒，走在公路上，周边的环境甚是优美，随手拍的照  					片，发朋友圈都是很美的。</span>
       	</li>
       	<li>
       			<span class="title">云海</span>
       		<img src="img/22.jpg" alt="" />
       		<span>车子行驶在路上，刚好遇上清晨，云城挺厚的，但也阻挡不了日出的光芒，走在公路上，周边的环境甚是优美，随手拍的照  					片，发朋友圈都是很美的。</span>
       	</li>
       </ul>
	   	

	   	
	   </div>
	    
	    
	    <div class="tong ">
	    	<div class="tong1 " >
	    	<div class="tongtian">通天路--达瓦更扎</div>
	    	<div class="qing">清晨起来 看云海 吃早茶 徒步露营  锻炼意志</div>
	    	<div class="qing">日出星空</div>
	    	<div class="gou">篝火烤鸡晚会</div>
	    	<div class="fa">发现更多</div>
	    	</div>
	    </div>   
	
	
	</div>
	   
	   <div class="col-md-2"></div>
	   <?php include('public/footer.php');?>
	     	  	
	     	  </div>
	
	     	  	
	     	 
	
	</div>
		
			<script>
		window.onload=function(){
			var  height=$(window).height();
		var  width=$(window).width()
	var   width1=$("#lun").width();
	
		
		$(".quan").css("width",width+34+"px");
		$(".bei").css("height",height+"px");
		$("body").css("height",height+"px");
		$(".bei").css("width",width+20+"px");
		$("#menu3").css("height",height-50+"px");
				$("#menu3").css("width",width*0.4+"px");
				
			$("#left").click(function(){
					var num=parseInt($("#lun").css("left"));
			console.log("222222");
			if(-num>=0.50*width1){
			$("#lun").css("left",0+"px");	
			}
			else{
			
				$("#lun").css("left",num-0.25*width1+"px");
			}
			
			
				
				
				
			})
	
		
		
		
		
		$("#right").click(function(){
					var num=parseInt($("#lun").css("left"));
			console.log("222222");
			if(num>5||num>-5){
			$("#lun").css("left",-0.5*width1+"px");	
			}
			else if(num>=0.50*width1){
			$("#lun").css("left",0+"px");	
			}
			else{
			
				$("#lun").css("left",num+0.25*width1+"px");
			}
			
			
				
				
				
			})
	
		
		
		
		
		
		
		//这是显示与隐藏导航栏的
		    	$(function(){
    	    var nul=0;	
    	 $(".quan").scroll(function(){
     var  a=$("body").height();
    
     var b=Math.round($(".quan").scrollTop());
  
     var c=window.innerHeight;

 
     if(b<=a/10){
     	$(".header1").removeClass("xian");
     	$(".header1").css("background","none");
     }
     else if(b==a-c){
     	$(".header1").removeClass("xian")
     		$(".header1").css("background","none");
     }
   
    else if(b>nul){
     		$(".header1").addClass("xian")
     }
     else if(b<nul){
     	$(".header1").removeClass("xian");
     	 if(b<=a/10){
     	
     	$(".header1").css("background","none");
     }
     	else{
     		$(".header1").css("background","#fff")
     	}
     	
     }
     
     nul=b;
     
     
     })
     
      })
     
     
     
     
     
     
     
		
	
		}
		
		
		
		</script>
	</body>
</html>
