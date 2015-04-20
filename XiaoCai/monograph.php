<?php require( 'header.php'); ?>
<header>
  <nav>
    <div class="header-title">
      <div class="header-back monograph-back"><span class="glyphicon glyphicon-menu-left"></span></div>
      <div class="header-main-title monograph-header">
          <ul>
            <li class="header-skillsEvaluating-li"><span class="glyphicon glyphicon-eye-open"></span> <span id="viewer-count">0</span></li>
            <li class="header-skillsEvaluating-li"><span class="glyphicon glyphicon-inbox"></span></li>
            <li class="header-skillsEvaluating-li"><span class="glyphicon glyphicon-link" id="mono-share"></span></li>
          </ul>
      </div>
    </div>
  </nav>
</header>

  <section>
     
     <div class="monograph-img1">
       <img src="">
     </div>

      <div class="skills-evaluating-title">
          <h4>0</h3>
          <p>0</p>
        </div>

        <div class="content-summary">
         <div class="content-summaryIn">
           内容摘要
         </div>
       </div>

        <div class="skeva-content">
              内容
        </div>

        <div class="skeva-xiaocai">
            <div class="skeva-xiaocai-content">
                晓菜
            </div>
        </div>

  </section>
<section>
  <div class="monoshare">
          <div class="monoshareDiv">
            <ul id="line">
              <li id="shareTofriend"><img src=""></li>
              <li id="shareTocircle"><img src=""></li>
            </ul>
             <ul id="monoshare-content">
               <li>发送给朋友</li>
               <li>分享至朋友圈</li>
             </ul>
          </div>
  </div>
  </section>
  <script type="text/javascript">
    $(document).ready(function(){
 
        $('#monograph-back').click(function(){
                backPreviosPage('monograph.php');
        });
      
        $('#mono-share').click(function(){
                $('.monoshare').css('display','block');
                $('body').css('overflow','hidden');
        });
      
        $('#shareTofriend').click(function(){
                 $('.monoshare').css('display','none');
                 $('body').css('overflow','visible');
        });
      
        $('#shareTocircle').click(function(){
                 $('.monoshare').css('display','none');
                 $('body').css('overflow','visible');
        });

        $('.header-back').click(function(){
          history.go(-1);
        });

        var currentHref=document.location.href;
        currentHref=currentHref.split('#')[1];

        getSkillsInfo(currentHref,0,function(data){
          var jsonData=JSON.parse(data);
          $('.monograph-img1 img').attr('src',jsonData['data']['info']['big_image']);
          $('.monograph-header ul .header-skillsEvaluating-li #viewer-count').html(jsonData['data']['info']['browse_num']);
          $('.skills-evaluating-title h4').html(jsonData['data']['info']['title']);
          $('.skills-evaluating-title p').html(jsonData['data']['info']['created_time']);
          $('.content-summaryIn').html(jsonData['data']['info']['paper']);
          $('.skeva-content').html(jsonData['data']['info']['content']);
          $('.skeva-content p').css('background','rgb(226,224,227)');
        });

    });
  </script>