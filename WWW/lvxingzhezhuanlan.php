<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>旅行者专栏</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<script src="js/jquery-3.3.1.js" type="text/javascript" charset="utf-8"></script>
<link href="./images/style.css" type="text/css" rel="stylesheet">
		<script src="js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/echarts.js" type="text/javascript"></script>
		<style>
		
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
			.shou img{
			
			}
			
				*{
				padding:0;
				margin:0;
			}
		   .header{
		   	padding:0!important;	
		   	position:relative;
		   	margin-bottom: 90px;
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
		    	width:38%;
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
		     .header .ming{
		    	font-size:32px;
		    	color:#fff;
		    		top:27%;
		    		left:50%;
		    		margin-left: -192px;
		    	position: absolute;
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
        
        .content .ni{
        	font-size: 32px;
        	margin-bottom: 24px;
        	display: inline-block;
        }
        .content .col-md-7 div{
        	font-size: 22px;
        	line-height: 40px;
        }
        .content .pull-left{
        	
        }
        
        .content .pull-right{
        	border-style: none;
        	padding: 0;
        	
        }
        
             .content .col-md-3 img{
             	width: 100%;
             }
        .content .row{
        	padding-right: 40px;
        		padding-left: 40px;
        		padding-top: 60px;
        		padding-bottom: 75px;
        		
        		
        }
         .content .col-md-10{
         border-bottom: 2px #bfbfbf dashed;	
         margin-top: 30px;
         }
        
        
        
        
        
         .footer{
		    margin-top: 60px;
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
        	.header a{
		    	color:#737272;
		    };
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
				
				<span  class="yi center-block "><a href="#" class="active">旅行者日记</a></span>
				<span  class="yi center-block"><a href="sheying.php">旅行者摄影</a></span>
			</div>
			
			
		
			<span class="pull-right">联系我们</span>
		</div>
		
		<img src="img/xia.png" class="bottom" alt="" />
		<div class="ming">山脚下的硗碛藏族乡嘎日村</div>
		
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner shou" role="listbox">
    <div class="item active">
      <img src="img/fang.jpg" alt="...">
      <div class="carousel-caption">
      
      </div>
    </div>
    <div class="item">
      <img src="img/19.jpg" alt="...">
      <div class="carousel-caption">
    
      </div>
    </div>
    <div class="item">
      <img src="img/21-.jpg" alt="...">
      <div class="carousel-caption">
    
      </div>
    </div>
  
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
	</div>
	
	<div class="content container-fluid">
		<!--第一个-->
		<div class="row ">
			<div class="col-md-1"></div>
			<div class="col-md-7 ">
				<sapn class="ni">你们都在问我的达瓦更扎，上攻略了！</sapn>
				<div>其实说要去爬 达瓦更扎 很久了，但每次都因为意外迟迟没行动，后来又说封山 
					巴拉 巴拉 的各种谣言，导致我们到这个元旦才终于提上了日程，去这个传说中
					的“小牛背山 ”，一览360度全雪山景，我直说一个字：“太美了！！！”</div>
				<div class="lv pull-right">——旅游博主</div>
			</div>
			<div class="col-md-3">
				<img src="img/1.png" alt="" />
			</div>
			<div class="col-md-10 col-md-offset-1"></div>
		</div>
		<!--第二个-->
		<div class="row ">
			<div class="col-md-1"></div>
			<div class="col-md-7 ">
				<sapn class="ni">达瓦更扎：美过牛背山的处女地，再不去就要收费了！</sapn>
				<div>说到看日出，观云海，赏雪山，你脑海中或许会首先想到牛背山那金光灿灿的浩
荡风景。但其实，在川西，还有一处秘境，有着不输于牛背山的美丽。它就是位
于四川省雅安市宝兴县硗碛藏族乡嘎日村境内达瓦更扎。</div>
				<div class="lv pull-right">——遇见旅行</div>
			</div>
			<div class="col-md-3">
				<img src="img/20.png" alt="" />
			</div>
			
			<div class="col-md-10 col-md-offset-1"></div>
		</div>
<!--第三个-->
		<div class="row ">
			<div class="col-md-1"></div>
			<div class="col-md-7 ">
				<sapn class="ni">人少景又好，达瓦更扎自驾旅游攻略</sapn>
				<div>当一座被人期待很久的神秘之处，慢慢的开始解开自己的面纱，那这里一定是足
够吸引人的，人们会驻足赞叹，会忍不住的想要去看看这里在面纱揭下之后，到
底有多美丽！这座一直被封山的达瓦更扎……</div>
				<div class="lv pull-right">——成都旅游自驾</div>
			</div>
			<div class="col-md-3">
				<img src="img/3.png" alt="" />
			</div>
			<div class="col-md-10 col-md-offset-1"></div>
		</div>
		<!--第四个-->
			<div class="row ">
			<div class="col-md-1"></div>
			<div class="col-md-7 ">
				<sapn class="ni">达瓦更扎景点推荐</sapn>
				<div>达瓦更扎景区位于四川省雅安市宝兴县硗碛藏族乡嘎日村境内，景区面积近50平
方公里，云顶最高海拔3866米，属于邛崃山脉，地势北高南低，被誉为“亚洲通
达最好的360°观景平台”。 </div>
				<div class="lv pull-right">——耍妹自驾游</div>
			</div>
			<div class="col-md-3">
				<img src="img/7.png" alt="" />
			</div>
			<div class="col-md-10 col-md-offset-1"></div>
		</div>
			<!--第五个-->
				<div class="row ">
			<div class="col-md-1"></div>
			<div class="col-md-7 ">
				<sapn class="ni">达瓦更扎——同样的地方，不一样的体验</sapn>
				<div>不要纠结太多，看了气象网的卫星云图，云的走向是不错的，说走就走，本着宁
愿带着不用，都不要到时候想用但是没有的原则，楼主装备了一个大包包，装备
：1：登山包、登山鞋、登山杖（可带可不带，我反正没带）…… </div>
				<div class="lv pull-right">——阿喵带你去旅行</div>
			</div>
			<div class="col-md-3">
				<img src="img/5.png" alt="" />
			</div>
			
		</div>
			
			
			
		
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="container-fluid ">
	     	  	<div class="row">
	     <div class="col-md-2"></div>
	     <?php include('public/footer.php');?>
	     	  	
	     	  </div>
	
	     	  	
	     	 
	
	</div>
		
			<script>
		window.onload=function(){
			var  height=$(window).height();
		var  width=$(window).width()
		
		
		$(".quan").css("width",width+34+"px");
		$(".shou").css("height",height+"px");
		$(".shou img").css("height",height+"px");
		$("body").css("height",height+"px");
		$(".shou").css("width",width+20+"px");
		$(".shou img").css("width",width+"px");
		$("#menu3").css("height",height-50+"px");
				$("#menu3").css("width",width*0.4+"px");
		
		
		
		//这是显示与隐藏导航栏的
		    	$(function(){
    	    var nul=0;	
    	 $(".quan").scroll(function(){
     var  a=$("body").height();
     console.log(a);
     var b=Math.round($(".quan").scrollTop());
      console.log(b);
     var c=window.innerHeight;
      console.log(c);
 
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
		
		<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
	
</script>
<script src="./images/Carousel.js"></script>
<script>
//$(".poster-main").Carousel("init");

$(".poster-main").Carousel({
"width":1000,		
"height":302,		
"posterWidth":600,	
"posterHeight":322,
"scale":0.75,		
"speed": 1550,	
"autoPlay":true,	
"delay":1500,	
"verticalAlign":"middle"	
});

</script>
	</body>
</html>
