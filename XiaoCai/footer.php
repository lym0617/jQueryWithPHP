	<link rel="stylesheet" href="extension/bootstrap.min.css" />
	<script type="text/javascript" src="extension/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="extension/bootstrap.min.js"></script>
	<script type="text/javascript" src="extension/unslider.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="extension/buttons.css">
	<script type="text/javascript">
	$(document).ready(function(){
		function isUserAtBottom(){
			return (($(document).height()-$(window).height())-$(window).scrollTop())<=60 ? true:false;
		}

		//处理底部菜单滑动事件,若用户滑动到底部则自动隐藏
		var footerIsDisplayed=false;
		function handleFooterEvent(){
			console.log($(window).scrollTop());
			if(($(window).height()+$(window).scrollTop())>=$(document).height()){
				if(footerIsDisplayed){
					
				}else{
					$('footer').slideUp();
					footerIsDisplayed=true;
				}
			}else{
				if($(window).scrollTop()==0){
					$('footer').slideDown();
					footerIsDisplayed=false;
				}
			}
		}

		$(document).click(function(){
			//$('header').slideToggle();
			//$('footer').slideToggle();
		});

		$(window).scroll(handleFooterEvent);

		/*幻灯片开始*/

		$(function() {
    		$('.banner').unslider();
		});

		if(window.chrome) {
			$('.banner li').css('background-size', '100% 100%');
		}

		$('.banner').unslider({
			arrows: true,	
			fluid: true,
			dots: true
		});

		/*幻灯片结束*/

		/*菜单按钮被点击*/
		var isSlided=false;
		$('.nav-menu').click(function(){
			var rate=0.2545;
			if($(document).width()>400){
				rate=0.2745;
			}else{
				rate=0.2945;
			}
			console.log(rate);
			var docWidth=$(document).width()-($(document).width()*rate);
			if(!isSlided){
				$('.main-page').animate({left:docWidth+'px'},400,function(){
					$('.login-page').css('display','block');
				});
				isSlided=true;
			}else{
				$('.main-page').animate({left:'0px'});
				$('.login-page').css('display','none');
				isSlided=false;
			}
		});
	});
	</script>
</body>
</html>