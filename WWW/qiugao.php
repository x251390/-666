<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>秋高气爽</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<script src="js/jquery-3.3.1.js" type="text/javascript" charset="utf-8"></script>

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
        #menu3{
        	text-align: left;
        }
			
			.col-md-4,.col-md-8,.col-md-9{
				padding: 0;
				margin: 0;
			}
			#menu3{
				text-align: left;
			}
			
				*{
				padding:0;
				margin:0;
			}
		   .header{
		   	padding:0!important;	
		   	position:relative;
		   	margin-bottom: 40px;
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
        .content .col-md-4 div{
        	font-size: 16px;
        	line-height: 35px;
        	padding-right: 40px;
        }
        .content .pull-left{
        	
        }
        
        .content .pull-right{
        	border-style: none;
        	padding: 0;
        	
        }
        
             .content .col-md-4 img{
             	width: 100%;
             }
        .content .row{
        	
        		
        	
        		padding-bottom: 28px;
        		
        		
        }
         .content .row .col-md-8{
         border-bottom: 2px #bfbfbf dashed;	
         margin-top: 30px;
         margin-left:16.5%!important;
         }
        
        .content2{
        	text-align: center;
        	font-size: 18px;
        		color:#727273;
        		margin-bottom: 75px;
        }
        .content2 span{
        	font-size: 32px;
        margin-bottom: 30px;
        	display: block;
        	line-height: 25px;
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
				
				<span  class="yi center-block "><a href="qiutian.php" >五彩缤纷</a></span>
				<span  class="yi center-block"><a href="qiugao.php" class="active">秋高气爽</a></span>
						<span  class="yi center-block"><a href="baixueaiai.php">白雪皑皑</a></span>
								<span  class="yi center-block"><a href="yunwu.php">云雾缠绕</a></span>
			</div>
			
			
		
			<span class="pull-right">联系我们</span>
		</div>
		
		<img src="img/xia.png" class="bottom" alt="" />
		
		<img src="img/02.jpg" class="bei img-responsive"/>
	
	</div>
	
		<div class="content2">
		
		<div class="dropdown">
              <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <span>十二月-三月</span>
                
              </a>
              <ul class="dropdown-menu" aria-labelledby="drop2">
                <li><a href="qiugao.php">秋高气爽</a></li>
                <li><a href="qiugao1.php">达瓦更扎的秋天</a></li>
              
              </ul>
            </div>
		
		
		<style>
			.dropdown-menu{
	left:50%!important;
	margin-left: -80px;
	text-align: center;
	
}
.content{
	display: flex;
	flex-direction: column;
	align-items: center;
	text-align: center;
	font-size: 20px;
	line-height: 35px;
	letter-spacing: 2px;
}
.content div{
	margin: 20px;
}
.content img{
	width:450px;
	height: 300px;
}

		</style>
		
		
		
		
		
		
秋高气爽<br/>
跟我走吧

	</div>
	
	
	
	<div class="content container-fluid">
		<!--第一个-->
		<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-4 ">
				<sapn class="ni">达瓦更扎的秋天</sapn>
				<div>	满山的树叶由红、黄、绿三种颜色的交错，让我们觉得大
						自然真的很神奇。在南方秋冬季节差异不明显，来到此地
						你才会明白什么是秋天、秋天的意义。<br/>
						这也是川西地区最美的秋季的地方了，天上的云在动，地
                                              上的落叶，远处的雪山，呼吸着一片青草味的空气。</div>
				
			</div>
			<div class="col-md-4">
				<img src="img/32.png" alt="" />
			</div>
			
			<div class="col-md-8 col-md-offset-2"></div>
		</div>
		<!--第二个-->
		<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-4 ">
				<sapn class="ni">牧羊人</sapn>
				<div>牧羊人在山上溜着自家的羊子，走到当地会不时看到好多
					羊子，很多家庭会养一些牲畜，并且还有自己的牧场，但
					去游玩的时候，请爱护环境哟<br />
					看累了，就去吃刷羊肉，美味有健康。</div>
				
			</div>
			<div class="col-md-4">
				<img src="img/33.png" alt="" />
			</div>
			
			<div class="col-md-8 col-md-offset-2"></div>
		</div>
<!--第三个-->
		<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-4 ">
				<sapn class="ni">放牛者</sapn>
				<div>
				”我是个牛仔，我不嫌放牛麻烦“，达瓦更扎是个美丽的
					地方，海拔有3000多米，空气非常好。蓝蓝的天空天上飘
					，下面是牛群跑。<br />
					看累了，就把风干的牛肉干拿出来，当着牛牛的面前吃掉，
看他会不会愤怒。哈哈哈！</div>
		
			</div>
			<div class="col-md-4">
				<img src="img/34.png" alt="" />
			</div>
			<div class="col-md-8 col-md-offset-2"></div>
		</div>
		<!--第四个-->
			<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-4 ">
				<sapn class="ni">草甸</sapn>
				<div>高山草甸又称为高寒草甸。在寒冷的环境条件下，发育在
				高原和高山的一种草地类型。其植被组成主要是冷中生的
				多年生草本植物，常伴生中生的多年生杂类草。植物种类
				繁多，莎草科、 禾本科以及杂类草都很丰富。密丛性短根
				茎蒿草属，为重要的组成植物。群落结构简单，层次不明
				显，生长密集，植株低矮，有时形成平坦的植毡.</div>
				<div class="lv pull-right">——耍妹自驾游</div>
			</div>
			<div class="col-md-4">
				<img src="img/35.png" alt="" />
			</div>
			<div class="col-md-8 col-md-offset-2"></div>
		</div>
			<!--第五个-->
				<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-4 ">
				<sapn class="ni">秋天来一份土豆烧牛肉</sapn>
				<div>在当地喜欢野炊、烧烤。主要原料有土豆和牛肉等，色泽
			        红润，口感咸香，秋冬两季食用最佳。<br />
			        更具人文特色，口感不错、保暖又好吃。同时又欣赏了秋
景，哎哟不错哟！</div>
			</div>
			<div class="col-md-4">
				<img src="img/36.png" alt="" />
			</div>
			
		</div>
		
		<div class="row ">
			<div class="col-md-2"></div>
			<div class="col-md-4 ">
				<sapn class="ni">彩色的秋天</sapn>
				<div>来到此地，别忘记去寻找彩色的秋天。天蓝、水碧、枫红、
芳草金、茂林多彩…<br/>
来到这里，你才会发现层林尽染,万叶飘丹，彩林红叶愈发
的浓烈。秋天的特征如此明显。</div>
			</div>
			<div class="col-md-4">
				<img src="img/37.png" alt="" />
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
		$(".bei").css("height",height+"px");
		$("body").css("height",height+"px");
		$(".bei").css("width",width+20+"px");
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
	</body>
</html>
