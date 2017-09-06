<?php
/*
Template Name: LP テンプレ
 */
?>
<?php include( TEMPLATEPATH . '/onecol-header.php' ); ?>

<body id="onecol" onload="Check()">

  <div>
	<!-- ヘッダー -->
	<section class="section01">
	  <header>
	    <h1><?php the_title(); ?></h1>
	  </header>
	  <div class="content01">
	    <div class="lp_head">
	      <?php if(get_field('lp_rogo')): ?>
	        <div class="lp_head_logo"><?php the_field('lp_rogo_text',$post->ID); ?></div>
	      <?php else: ?>
	        <div class="lp_head_logo">
	          <img src="<?php the_field('lp_rogo_image',$post->ID); ?>" alt="<?php the_field('lp_rogo_text',$post->ID); ?>" height="50px" />
	        </div>
	      <?php endif; ?>
	      <div class="lp_head_tel"><?php the_field('lp_tel',$post->ID); ?></div>
	    </div>
	  </div>
	</section>

	<!-- メイン部分 -->
	<section class="section02">
	  <div class="content02">

	  <?php if(have_posts()): while(have_posts()): the_post(); ?>
	    <div id="post-<?php the_ID(); ?>" class="content09">
	      <?php the_content(); ?>
	    </div>
	  <?php endwhile; endif; ?>

	  <?php if(post_custom('lp_catch_main')): ?>
	    <div class="lp_main">
	      <div class="lp_main_l">
	        <div class="lp_main_lup">
	          <h2 class="lp_catch_main">
		    <?php if (is_mobile()) :?>
		      <?php 
		        $catch = get_field('lp_catch_main',$post->ID);
		        $catch = strip_tags($catch);
		        echo $catch;
		      ?>
		    <?php else: ?>
		      <?php the_field('lp_catch_main',$post->ID); ?>
		    <?php endif; ?>
		  </h2>
	          <p class="lp_catch_sub"><?php the_field('lp_catch_sub',$post->ID); ?></p>
	        </div>
	        <div class="lp_main_ldw">
	          <?php if(get_field('lp_keni_choose')): ?>
	            <div class="lp_keni_text"><?php the_field('lp_keni_text',$post->ID); ?></div>
	          <?php else: ?>
		    <?php if(post_custom('lp_keni_image')): ?>
	              <img src="<?php the_field('lp_keni_image',$post->ID); ?>" />
		    <?php endif; ?>
	          <?php endif; ?>
	        </div>
	      </div>
	      <div class="lp_main_r">
	        <?php if(post_custom('lp_main_image')): ?>
	          <img src="<?php the_field('lp_main_image',$post->ID); ?>" />
	        <?php endif; ?>
	      </div>
	    </div>
	  <?php endif; ?>

	    <?php if(post_custom('lp_main_free')): ?>
	      <div class="lp_free">
	        <?php the_field('lp_main_free',$post->ID); ?>
	      </div>
	    <?php endif; ?>
	  </div>
	</section>

	<!-- アクション導線01 -->
	<?php if(post_custom('lp_action_on01')): ?>
	<section class="section03">
	  <div class="content03">
	    <div class="lp_action">
	      <div class="lp_action_up">
		<?php if (is_mobile()) :?>
		  <?php 
		    $action = get_field('lp_action_title',$post->ID);
		    $action = strip_tags($action);
		    echo $action;
		  ?>
		<?php else: ?>
		  <?php the_field('lp_action_title',$post->ID); ?>
		<?php endif; ?>
	      </div>
	      <div class="lp_action_dw">
	        <div class="lp_action_dw_l">
	          <?php if(get_field('lp_merit_choose')): ?>
	            <?php if(post_custom('lp_merit_01')): ?>
	              <p class="merit_mark"><?php the_field('lp_merit_01',$post->ID); ?></p>
	            <?php endif; ?>
	            <?php if(post_custom('lp_merit_02')): ?>
	              <p class="merit_mark"><?php the_field('lp_merit_02',$post->ID); ?></p>
	            <?php endif; ?>
	            <?php if(post_custom('lp_merit_03')): ?>
	              <p class="merit_mark"><?php the_field('lp_merit_03',$post->ID); ?></p>
	            <?php endif; ?>
	          <?php else: ?>
	            <?php if(post_custom('lp_merit_free')): ?>
	              <?php the_field('lp_merit_free',$post->ID); ?>
	            <?php endif; ?>
	          <?php endif; ?>
	        </div>
	        <div class="lp_action_dw_r">
	          <?php if(get_field('lp_action_choose')): ?>
	            <div class="free_btn_box">
	              <a class="free_btn" href="<?php the_field('lp_action_btn_url',$post->ID); ?>" target="<?php the_field('lp_action_btn_target',$post->ID); ?>" >
	                <span class="r_arrow"><?php the_field('lp_action_btn_text',$post->ID); ?></span>
	              </a>
	            </div>
	          <?php else: ?>
	            <?php if(post_custom('lp_action_form')): ?>
	              <?php the_field('lp_action_form',$post->ID); ?>
	            <?php endif; ?>
	          <?php endif; ?>
	        </div>
	      </div>
	    </div>
	    <?php if(post_custom('lp_action_free')): ?>
	      <div class="lp_action_free">
	        <?php the_field('lp_action_free',$post->ID); ?>
	      </div>
	    <?php endif; ?>
	  </div>
	</section>
	<?php endif; ?>

	<!-- 導入・きっかけ -->
	<?php if(post_custom('lp_intro_on')): ?>
	<section class="section04">
	  <div class="content04">
	    <div class="lp_intro">
	      <h2 class="lp_intro_title01">
		<?php if (is_mobile()) :?>
		  <?php 
		    $intro = get_field('lp_intro_title01',$post->ID);
		    $intro = strip_tags($intro);
		    echo $intro;
		  ?>
		<?php else: ?>
		  <?php the_field('lp_intro_title01',$post->ID); ?>
		<?php endif; ?>
	      </h2>
	      <div class="lp_intro_cont">
	        <div class="lp_intro_cont_l">
	          <?php the_field('lp_intro_cont',$post->ID); ?>
	        </div>
	        <div class="lp_intro_cont_r">
	          <?php if(post_custom('lp_intro_image')): ?>
 	            <img src="<?php the_field('lp_intro_image',$post->ID); ?>" />
	          <?php endif; ?>
	        </div>
	      </div>
	      <?php if(post_custom('lp_intro_free')): ?>
	        <div class="lp_free" style="margin-top:50px;margin-bottom:50px;">
	          <?php the_field('lp_intro_free',$post->ID); ?>
	        </div>
	      <?php endif; ?>
	      <div class="lp_intro_title02">
	        <p>
		  <?php if (is_mobile()) :?>
		    <?php 
		      $intro02 = get_field('lp_intro_title02',$post->ID);
		      $intro02 = strip_tags($intro02);
		      echo $intro02;
		    ?>
		  <?php else: ?>
		    <?php the_field('lp_intro_title02',$post->ID); ?>
		  <?php endif; ?>
		</p>
	        <img src="<?php bloginfo('template_directory'); ?>/lp_img/arrow01.png" />
	      </div>
	    </div>
	  </div>
	</section>
	<?php endif; ?>

	<!-- ベネフィット -->
	<?php if(post_custom('lp_benefit_on')): ?>
	<section class="section05">
	  <div class="content05">
	    <div class="lp_benefit">
	      <h2 class="lp_benefit_title01">
		<?php if (is_mobile()) :?>
		  <?php 
		    $benefit = get_field('lp_benefit_title01',$post->ID);
		    $benefit = strip_tags($benefit);
		    echo $benefit;
		  ?>
		<?php else: ?>
		  <?php the_field('lp_benefit_title01',$post->ID); ?>
		<?php endif; ?>
	      </h2>
	      <div class="lp_benefit_merit">
	        <div class="lp_benefit_merit_l">
	          <h3 class="lp_benefit_merit01"><?php the_field('lp_benefit_merit01',$post->ID); ?></h3>
	          <div class="p_size"><?php the_field('lp_benefit_merit01_cont',$post->ID); ?></div>
	        </div>
	        <div class="lp_benefit_merit_r">
	          <?php if(post_custom('lp_benefit_merit01_img')): ?>
	            <img src="<?php the_field('lp_benefit_merit01_img',$post->ID); ?>" />
	          <?php endif; ?>
	        </div>
	      </div>
	      <div class="lp_benefit_merit">
	        <div class="lp_benefit_merit_l">
	          <h3 class="lp_benefit_merit02"><?php the_field('lp_benefit_merit02',$post->ID); ?></h3>
	          <div class="p_size"><?php the_field('lp_benefit_merit02_cont',$post->ID); ?></div>
	        </div>
	        <div class="lp_benefit_merit_r">
	          <?php if(post_custom('lp_benefit_merit02_img')): ?>
	            <img src="<?php the_field('lp_benefit_merit02_img',$post->ID); ?>" />
	          <?php endif; ?>
	        </div>
	      </div>
	      <div class="lp_benefit_merit">
	        <div class="lp_benefit_merit_l">
	          <h3 class="lp_benefit_merit03"><?php the_field('lp_benefit_merit03',$post->ID); ?></h3>
	          <div class="p_size"><?php the_field('lp_benefit_merit03_cont',$post->ID); ?></div>
	        </div>
	        <div class="lp_benefit_merit_r">
	          <?php if(post_custom('lp_benefit_merit03_img')): ?>
	            <img src="<?php the_field('lp_benefit_merit03_img',$post->ID); ?>" />
	          <?php endif; ?>
	        </div>
	      </div>
	      <?php if(post_custom('lp_benefit_merit04')): ?>
	        <div class="lp_benefit_merit">
	          <div class="lp_benefit_merit_l">
	            <h3 class="lp_benefit_merit04"><?php the_field('lp_benefit_merit04',$post->ID); ?></h3>
	            <div class="p_size"><?php the_field('lp_benefit_merit04_cont',$post->ID); ?></div>
	          </div>
	          <div class="lp_benefit_merit_r">
	            <?php if(post_custom('lp_benefit_merit04_img')): ?>
	              <img src="<?php the_field('lp_benefit_merit04_img',$post->ID); ?>" />
	            <?php endif; ?>
	          </div>
	        </div>
	      <?php endif; ?>
	      <?php if(post_custom('lp_benefit_merit05')): ?>
	        <div class="lp_benefit_merit">
	          <div class="lp_benefit_merit_l">
	            <h3 class="lp_benefit_merit05"><?php the_field('lp_benefit_merit05',$post->ID); ?></h3>
	            <div class="p_size"><?php the_field('lp_benefit_merit05_cont',$post->ID); ?></div>
	          </div>
	          <div class="lp_benefit_merit_r">
	            <?php if(post_custom('lp_benefit_merit05_img')): ?>
	              <img src="<?php the_field('lp_benefit_merit05_img',$post->ID); ?>" />
	            <?php endif; ?>
	          </div>
	        </div>
	      <?php endif; ?>
	      <?php if(post_custom('lp_benefit_free')): ?>
	        <div class="lp_free" style="margin-top:50px;margin-bottom:50px;">
	          <?php the_field('lp_benefit_free',$post->ID); ?>
	        </div>
	      <?php endif; ?>
	      <div class="lp_benefit_title02">
	        <p>
		  <?php if (is_mobile()) :?>
		    <?php 
		      $benefit02 = get_field('lp_benefit_title02',$post->ID);
		      $benefit02 = strip_tags($benefit02);
		      echo $benefit02;
		    ?>
		  <?php else: ?>
		    <?php the_field('lp_benefit_title02',$post->ID); ?>
		  <?php endif; ?>
		</p>
	        <img src="<?php bloginfo('template_directory'); ?>/lp_img/arrow01.png" />
	      </div>
	    </div>
	  </div>
	</section>
	<?php endif; ?>

	<!-- アクション導線02 -->
	<?php if(post_custom('lp_action_on02')): ?>
	<section class="section03">
	  <div class="content03">
	    <div class="lp_action">
	      <div class="lp_action_up">
		<?php if (is_mobile()) :?>
		  <?php 
		    $action = get_field('lp_action_title',$post->ID);
		    $action = strip_tags($action);
		    echo $action;
		  ?>
		<?php else: ?>
		  <?php the_field('lp_action_title',$post->ID); ?>
		<?php endif; ?>
	      </div>
	      <div class="lp_action_dw">
	        <div class="lp_action_dw_l">
	          <?php if(get_field('lp_merit_choose')): ?>
	            <?php if(post_custom('lp_merit_01')): ?>
	              <p class="merit_mark"><?php the_field('lp_merit_01',$post->ID); ?></p>
	            <?php endif; ?>
	            <?php if(post_custom('lp_merit_02')): ?>
	              <p class="merit_mark"><?php the_field('lp_merit_02',$post->ID); ?></p>
	            <?php endif; ?>
	            <?php if(post_custom('lp_merit_03')): ?>
	              <p class="merit_mark"><?php the_field('lp_merit_03',$post->ID); ?></p>
	            <?php endif; ?>
	          <?php else: ?>
	            <?php if(post_custom('lp_merit_free')): ?>
	              <?php the_field('lp_merit_free',$post->ID); ?>
	            <?php endif; ?>
	          <?php endif; ?>
	        </div>
	        <div class="lp_action_dw_r">
	          <?php if(get_field('lp_action_choose')): ?>
	            <div class="free_btn_box">
	              <a class="free_btn" href="<?php the_field('lp_action_btn_url',$post->ID); ?>" target="<?php the_field('lp_action_btn_target',$post->ID); ?>" >
	                <span class="r_arrow"><?php the_field('lp_action_btn_text',$post->ID); ?></span>
	              </a>
	            </div>
	          <?php else: ?>
	            <?php if(post_custom('lp_action_form')): ?>
	              <?php the_field('lp_action_form',$post->ID); ?>
	            <?php endif; ?>
	          <?php endif; ?>
	        </div>
	      </div>
	    </div>
	    <?php if(post_custom('lp_action_free')): ?>
	      <div class="lp_action_free">
	        <?php the_field('lp_action_free',$post->ID); ?>
	      </div>
	    <?php endif; ?>
	  </div>
	</section>
	<?php endif; ?>

	<!-- 商品・サービス説明 -->
	<?php if(post_custom('lp_item_on')): ?>
	<section class="section06">
	  <div class="content06">
	    <div class="lp_item_01">
	      <h2 class="lp_item_title01">
		<?php if (is_mobile()) :?>
		  <?php 
		    $item = get_field('lp_item_title01',$post->ID);
		    $item = strip_tags($item);
		    echo $item;
		  ?>
		<?php else: ?>
		  <?php the_field('lp_item_title01',$post->ID); ?>
		<?php endif; ?>
	      </h2>
	      <div class="lp_item_info">
	        <div class="lp_item_info_l">
	          <div class="lp_item_info_lup"><?php the_field('lp_item_sub_title',$post->ID); ?></div>
	    	  <?php if(post_custom('lp_item_info')): ?>
	            <div class="lp_item_info_ldw"><?php the_field('lp_item_info',$post->ID); ?></div>
	          <?php endif; ?>
	        </div>
	        <div class="lp_item_info_r">
	          <?php if(post_custom('lp_item_image')): ?>
	            <img src="<?php the_field('lp_item_image',$post->ID); ?>" />
	          <?php endif; ?>
	        </div>
	      </div>
	    </div>
	    <?php if(post_custom('lp_item_free')): ?>
	      <div class="lp_free" style="margin-top:50px;margin-bottom:80px;">
	        <?php the_field('lp_item_free',$post->ID); ?>
	      </div>
	    <?php endif; ?>
	    <div class="lp_item_02">
	      <h2 class="lp_item_title02">
		<?php if (is_mobile()) :?>
		  <?php 
		    $item02 = get_field('lp_item_title02',$post->ID);
		    $item02 = strip_tags($item02);
		    echo $item02;
		  ?>
		<?php else: ?>
		  <?php the_field('lp_item_title02',$post->ID); ?>
		<?php endif; ?>
	      </h2>
	      <div class="lp_item_step">
	        <div class="lp_item_step_l">
	          <?php if(post_custom('lp_step_01')): ?>
	            <img src="<?php the_field('lp_step_01',$post->ID); ?>" />
	          <?php endif; ?>
	        </div>
	        <div class="lp_item_step_r">
	          <p class="step">STEP1</p>
	          <div class="p_size"><?php the_field('lp_step01_info',$post->ID); ?></div>
	        </div>
	      </div>
	      <div class="lp_item_step">
	        <div class="lp_item_step_l">
	          <?php if(post_custom('lp_step_02')): ?>
	            <img src="<?php the_field('lp_step_02',$post->ID); ?>" />
	          <?php endif; ?>
	        </div>
	        <div class="lp_item_step_r">
	          <p class="step">STEP2</p>
	          <div class="p_size"><?php the_field('lp_step02_info',$post->ID); ?></div>
	        </div>
	      </div>
	      <div class="lp_item_step">
	        <div class="lp_item_step_l">
	          <?php if(post_custom('lp_step_03')): ?>
	            <img src="<?php the_field('lp_step_03',$post->ID); ?>" />
	          <?php endif; ?>
	        </div>
	        <div class="lp_item_step_r">
	          <p class="step">STEP3</p>
	          <div class="p_size"><?php the_field('lp_step03_info',$post->ID); ?></div>
	        </div>
	      </div>
	      <?php if(post_custom('lp_step_04')): ?>
	        <div class="lp_item_step">
	          <div class="lp_item_step_l">
	            <?php if(post_custom('lp_step_04')): ?>
	              <img src="<?php the_field('lp_step_04',$post->ID); ?>" />
	            <?php endif; ?>
	          </div>
	          <div class="lp_item_step_r">
	            <p class="step">STEP4</p>
	            <div class="p_size"><?php the_field('lp_step04_info',$post->ID); ?></div>
	          </div>
	        </div>
	      <?php endif; ?>
	      <?php if(post_custom('lp_step_05')): ?>
	        <div class="lp_item_step">
	          <div class="lp_item_step_l">
	            <?php if(post_custom('lp_step_05')): ?>
	              <img src="<?php the_field('lp_step_05',$post->ID); ?>" />
	            <?php endif; ?>
	          </div>
	          <div class="lp_item_step_r">
	            <p class="step">STEP5</p>
	            <div class="p_size"><?php the_field('lp_step05_info',$post->ID); ?></div>
	          </div>
	        </div>
	      <?php endif; ?>
	      <?php if(post_custom('lp_step_free')): ?>
	        <div class="lp_free" style="margin-top:50px;">
	          <?php the_field('lp_step_free',$post->ID); ?>
	        </div>
	      <?php endif; ?>
	    </div>
	  </div>
	</section>
	<?php endif; ?>

	<!-- アクション導線03 -->
	<?php if(post_custom('lp_action_on03')): ?>
	<section class="section03">
	  <div class="content03">
	    <div class="lp_action">
	      <div class="lp_action_up">
		<?php if (is_mobile()) :?>
		  <?php 
		    $action = get_field('lp_action_title',$post->ID);
		    $action = strip_tags($action);
		    echo $action;
		  ?>
		<?php else: ?>
		  <?php the_field('lp_action_title',$post->ID); ?>
		<?php endif; ?>
	      </div>
	      <div class="lp_action_dw">
	        <div class="lp_action_dw_l">
	          <?php if(get_field('lp_merit_choose')): ?>
	            <?php if(post_custom('lp_merit_01')): ?>
	              <p class="merit_mark"><?php the_field('lp_merit_01',$post->ID); ?></p>
	            <?php endif; ?>
	            <?php if(post_custom('lp_merit_02')): ?>
	              <p class="merit_mark"><?php the_field('lp_merit_02',$post->ID); ?></p>
	            <?php endif; ?>
	            <?php if(post_custom('lp_merit_03')): ?>
	              <p class="merit_mark"><?php the_field('lp_merit_03',$post->ID); ?></p>
	            <?php endif; ?>
	          <?php else: ?>
	            <?php if(post_custom('lp_merit_free')): ?>
	              <?php the_field('lp_merit_free',$post->ID); ?>
	            <?php endif; ?>
	          <?php endif; ?>
	        </div>
	        <div class="lp_action_dw_r">
	          <?php if(get_field('lp_action_choose')): ?>
	            <div class="free_btn_box">
	              <a class="free_btn" href="<?php the_field('lp_action_btn_url',$post->ID); ?>" target="<?php the_field('lp_action_btn_target',$post->ID); ?>" >
	                <span class="r_arrow"><?php the_field('lp_action_btn_text',$post->ID); ?></span>
	              </a>
	            </div>
	          <?php else: ?>
	            <?php if(post_custom('lp_action_form')): ?>
	              <?php the_field('lp_action_form',$post->ID); ?>
	            <?php endif; ?>
	          <?php endif; ?>
	        </div>
	      </div>
	    </div>
	    <?php if(post_custom('lp_action_free')): ?>
	      <div class="lp_action_free">
	        <?php the_field('lp_action_free',$post->ID); ?>
	      </div>
	    <?php endif; ?>
	  </div>
	</section>
	<?php endif; ?>

	<!-- お客様の声 -->
	<?php if(post_custom('lp_voice_on')): ?>
	<section class="section07">
	  <div class="content07">
	    <div class="lp_voice">
	      <h2 class="lp_voice_title">
		<?php if (is_mobile()) :?>
		  <?php 
		    $voice = get_field('lp_voice_title',$post->ID);
		    $voice = strip_tags($voice);
		    echo $voice;
		  ?>
		<?php else: ?>
		  <?php the_field('lp_voice_title',$post->ID); ?>
		<?php endif; ?>
	      </h2>
	      <div class="lp_voice_01">
	        <div class="lp_voice_01_l">
	          <?php if(post_custom('lp_voice01_img')): ?>
	            <img src="<?php the_field('lp_voice01_img',$post->ID); ?>" />
	          <?php endif; ?>
	        </div>
	        <div class="lp_voice_01_r">
	          <h3 class="first_voice fa fa-microphone"><span><?php the_field('lp_voice01_title',$post->ID); ?></span></h3>
	          <div class="p_size"><?php the_field('lp_voice01_cont',$post->ID); ?></div>
	        </div>
	      </div>
	      <div class="lp_voice_01">
	        <div class="lp_voice_01_l">
	          <?php if(post_custom('lp_voice02_img')): ?>
	            <img src="<?php the_field('lp_voice02_img',$post->ID); ?>" />
	          <?php endif; ?>
	        </div>
	        <div class="lp_voice_01_r">
	          <h3 class="first_voice fa fa-microphone"><span><?php the_field('lp_voice02_title',$post->ID); ?></span></h3>
	          <div class="p_size"><?php the_field('lp_voice02_cont',$post->ID); ?></div>
	        </div>
	      </div>
	      <div class="lp_voice_01">
	        <div class="lp_voice_01_l">
	          <?php if(post_custom('lp_voice03_img')): ?>
	            <img src="<?php the_field('lp_voice03_img',$post->ID); ?>" />
	          <?php endif; ?>
	        </div>
	        <div class="lp_voice_01_r">
	          <h3 class="first_voice fa fa-microphone"><span><?php the_field('lp_voice03_title',$post->ID); ?></span></h3>
	          <div class="p_size"><?php the_field('lp_voice03_cont',$post->ID); ?></div>
	        </div>
	      </div>
	      <?php if(post_custom('lp_voice04_title')): ?>
	        <div class="lp_voice_01">
	          <div class="lp_voice_01_l">
	            <?php if(post_custom('lp_voice04_img')): ?>
	              <img src="<?php the_field('lp_voice04_img',$post->ID); ?>" />
	            <?php endif; ?>
	          </div>
	          <div class="lp_voice_01_r">
	            <h3 class="first_voice fa fa-microphone"><span><?php the_field('lp_voice04_title',$post->ID); ?></span></h3>
	            <div class="p_size"><?php the_field('lp_voice04_cont',$post->ID); ?></div>
	          </div>
	        </div>
	      <?php endif; ?>
	      <?php if(post_custom('lp_voice05_title')): ?>
	        <div class="lp_voice_01">
	          <div class="lp_voice_01_l">
	            <?php if(post_custom('lp_voice05_img')): ?>
	              <img src="<?php the_field('lp_voice05_img',$post->ID); ?>" />
	            <?php endif; ?>
	          </div>
	          <div class="lp_voice_01_r">
	            <h3 class="first_voice fa fa-microphone"><span><?php the_field('lp_voice05_title',$post->ID); ?></span></h3>
	            <div class="p_size"><?php the_field('lp_voice05_cont',$post->ID); ?></div>
	          </div>
	        </div>
	      <?php endif; ?>
	    </div>
	    <?php if(post_custom('lp_voice_free')): ?>
	      <div class="lp_free">
	        <?php the_field('lp_voice_free',$post->ID); ?>
	      </div>
	    <?php endif; ?>
	  </div>
	</section>
	<?php endif; ?>

	<!-- アクション導線04 -->
	<?php if(post_custom('lp_action_on04')): ?>
	<section class="section03">
	  <div class="content03">
	    <div class="lp_action">
	      <div class="lp_action_up">
		<?php if (is_mobile()) :?>
		  <?php 
		    $action = get_field('lp_action_title',$post->ID);
		    $action = strip_tags($action);
		    echo $action;
		  ?>
		<?php else: ?>
		  <?php the_field('lp_action_title',$post->ID); ?>
		<?php endif; ?>
	      </div>
	      <div class="lp_action_dw">
	        <div class="lp_action_dw_l">
	          <?php if(get_field('lp_merit_choose')): ?>
	            <?php if(post_custom('lp_merit_01')): ?>
	              <p class="merit_mark"><?php the_field('lp_merit_01',$post->ID); ?></p>
	            <?php endif; ?>
	            <?php if(post_custom('lp_merit_02')): ?>
	              <p class="merit_mark"><?php the_field('lp_merit_02',$post->ID); ?></p>
	            <?php endif; ?>
	            <?php if(post_custom('lp_merit_03')): ?>
	              <p class="merit_mark"><?php the_field('lp_merit_03',$post->ID); ?></p>
	            <?php endif; ?>
	          <?php else: ?>
	            <?php if(post_custom('lp_merit_free')): ?>
	              <?php the_field('lp_merit_free',$post->ID); ?>
	            <?php endif; ?>
	          <?php endif; ?>
	        </div>
	        <div class="lp_action_dw_r">
	          <?php if(get_field('lp_action_choose')): ?>
	            <div class="free_btn_box">
	              <a class="free_btn" href="<?php the_field('lp_action_btn_url',$post->ID); ?>" target="<?php the_field('lp_action_btn_target',$post->ID); ?>" >
	                <span class="r_arrow"><?php the_field('lp_action_btn_text',$post->ID); ?></span>
	              </a>
	            </div>
	          <?php else: ?>
	            <?php if(post_custom('lp_action_form')): ?>
	              <?php the_field('lp_action_form',$post->ID); ?>
	            <?php endif; ?>
	          <?php endif; ?>
	        </div>
	      </div>
	    </div>
	    <?php if(post_custom('lp_action_free')): ?>
	      <div class="lp_action_free">
	        <?php the_field('lp_action_free',$post->ID); ?>
	      </div>
	    <?php endif; ?>
	  </div>
	</section>
	<?php endif; ?>

	<!-- FAQ（よくある質問） -->
	<?php if(post_custom('lp_faq_on')): ?>
	<section class="section08">
	  <div class="content08">
	    <div class="lp_faq">
	      <h2 class="lp_faq_title">
		<?php if (is_mobile()) :?>
		  <?php 
		    $faq = get_field('lp_faq_title',$post->ID);
		    $faq = strip_tags($faq);
		    echo $faq;
		  ?>
		<?php else: ?>
		  <?php the_field('lp_faq_title',$post->ID); ?>
		<?php endif; ?>
	      </h2>
	      <div class="lp_faq_01">
	        <h3 class="lp_faq_q"><?php the_field('lp_faq01_title',$post->ID); ?></h3>
	        <div class="lp_faq_a"><?php the_field('lp_faq01_ans',$post->ID); ?></div>
	      </div>
	      <div class="lp_faq_01">
	        <h3 class="lp_faq_q"><?php the_field('lp_faq02_title',$post->ID); ?></h3>
	        <div class="lp_faq_a"><?php the_field('lp_faq02_ans',$post->ID); ?></div>
	      </div>
	      <div class="lp_faq_01">
	        <h3 class="lp_faq_q"><?php the_field('lp_faq03_title',$post->ID); ?></h3>
	        <div class="lp_faq_a"><?php the_field('lp_faq03_ans',$post->ID); ?></div>
	      </div>
	      <?php if(post_custom('lp_faq04_title')): ?>
	        <div class="lp_faq_01">
	          <h3 class="lp_faq_q"><?php the_field('lp_faq04_title',$post->ID); ?></h3>
	          <div class="lp_faq_a"><?php the_field('lp_faq04_ans',$post->ID); ?></div>
	        </div>
	      <?php endif; ?>
	      <?php if(post_custom('lp_faq05_title')): ?>
	        <div class="lp_faq_01">
	          <h3 class="lp_faq_q"><?php the_field('lp_faq05_title',$post->ID); ?></h3>
	          <div class="lp_faq_a"><?php the_field('lp_faq05_ans',$post->ID); ?></div>
	        </div>
	      <?php endif; ?>
	    </div>
	    <?php if(post_custom('lp_faq_free')): ?>
	      <div class="lp_free">
	        <?php the_field('lp_faq_free',$post->ID); ?>
	      </div>
	    <?php endif; ?>
	  </div>
	</section>
	<?php endif; ?>

	<!-- アクション導線05 -->
	<?php if(post_custom('lp_action_on05')): ?>
	<section class="section03">
	  <div class="content03">
	    <div class="lp_action">
	      <div class="lp_action_up">
		<?php if (is_mobile()) :?>
		  <?php 
		    $action = get_field('lp_action_title',$post->ID);
		    $action = strip_tags($action);
		    echo $action;
		  ?>
		<?php else: ?>
		  <?php the_field('lp_action_title',$post->ID); ?>
		<?php endif; ?>
	      </div>
	      <div class="lp_action_dw">
	        <div class="lp_action_dw_l">
	          <?php if(get_field('lp_merit_choose')): ?>
	            <?php if(post_custom('lp_merit_01')): ?>
	              <p class="merit_mark"><?php the_field('lp_merit_01',$post->ID); ?></p>
	            <?php endif; ?>
	            <?php if(post_custom('lp_merit_02')): ?>
	              <p class="merit_mark"><?php the_field('lp_merit_02',$post->ID); ?></p>
	            <?php endif; ?>
	            <?php if(post_custom('lp_merit_03')): ?>
	              <p class="merit_mark"><?php the_field('lp_merit_03',$post->ID); ?></p>
	            <?php endif; ?>
	          <?php else: ?>
	            <?php if(post_custom('lp_merit_free')): ?>
	              <?php the_field('lp_merit_free',$post->ID); ?>
	            <?php endif; ?>
	          <?php endif; ?>
	        </div>
	        <div class="lp_action_dw_r">
	          <?php if(get_field('lp_action_choose')): ?>
	            <div class="free_btn_box">
	              <a class="free_btn" href="<?php the_field('lp_action_btn_url',$post->ID); ?>" target="<?php the_field('lp_action_btn_target',$post->ID); ?>" >
	                <span class="r_arrow"><?php the_field('lp_action_btn_text',$post->ID); ?></span>
	              </a>
	            </div>
	          <?php else: ?>
	            <?php if(post_custom('lp_action_form')): ?>
	              <?php the_field('lp_action_form',$post->ID); ?>
	            <?php endif; ?>
	          <?php endif; ?>
	        </div>
	      </div>
	    </div>
	    <?php if(post_custom('lp_action_free')): ?>
	      <div class="lp_action_free">
	        <?php the_field('lp_action_free',$post->ID); ?>
	      </div>
	    <?php endif; ?>
	  </div>
	</section>
	<?php endif; ?>

	<!-- PS（追伸） -->
	<?php if(post_custom('lp_ps_on')): ?>
	<section class="section09">
	  <div class="content09">
	    <?php if(post_custom('lp_ps')): ?>
	      <div class="lp_free">
	        <?php the_field('lp_ps',$post->ID); ?>
	      </div>
	    <?php endif; ?>
	  </div>
	</section>
	<?php endif; ?>

	<div>
	<div>

<?php include( TEMPLATEPATH . '/onecol-footer.php' ); ?>