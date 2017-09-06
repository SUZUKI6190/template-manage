<style type="text/css" media="screen">
/*------　サイト幅（標準画像）　------*/
#onelp,#onelpN {width:<?php the_field('m_width',$post->ID); ?>;}
/*------　サイト幅（標準画像：ライン）　------*/
#onelpL {width:calc(<?php the_field('m_width',$post->ID); ?> + 2px);}
/*------　サイト幅（ワイド画像：シャドウ、なし）　------*/
#onelpw,#onelpNw {width:<?php the_field('m_widthw',$post->ID); ?>;}
/*------　サイト幅（ワイド画像：ライン）　------*/
#onelpLw {width:calc(<?php the_field('m_widthw',$post->ID); ?> + 2px);}
/*------　コンテンツ幅（標準画像）　------*/
.onecont {width:<?php the_field('c_width',$post->ID); ?>;}
/*------　コンテンツ幅（ワイド画像）　------*/
.onecontw {width:<?php the_field('c_widthw',$post->ID); ?>;}
/*------　コンテンツ画像幅（標準画像）　------*/
.onecont img {max-width:<?php the_field('c_width',$post->ID); ?>;height:auto;}
/*------　コンテンツ画像幅（ワイド画像）　------*/
.onecontw img {max-width:<?php the_field('c_widthw',$post->ID); ?>;height:auto;}
/*------　両サイドマージン（標準画像）　------*/
.onecoln .side_m {padding: 0 <?php the_field('p_tag_side',$post->ID); ?>;margin-bottom: 15px;}
/*------　両サイドマージン（ワイド画像）　------*/
.onecolw .side_m {padding: 0 <?php the_field('p_tag_sidew',$post->ID); ?>;margin-bottom: 15px;}
/*------　タイトルバーカラー（標準画像）　------*/
.onecont h2, .onecont h3 {background-color: <?php the_field('tbar',$post->ID); ?>;}
.onecont h4 {border-left-color: <?php the_field('tbar',$post->ID); ?>;}
.onecont h5 {border-bottom-color: <?php the_field('tbar',$post->ID); ?>;}
/*------　タイトルバーカラー（ワイド画像）　------*/
.onecontw h2, .onecontw h3 {background-color: <?php the_field('tbarw',$post->ID); ?>;}
.onecontw h4 {border-left-color: <?php the_field('tbarw',$post->ID); ?>;}
.onecontw h5 {border-bottom-color: <?php the_field('tbarw',$post->ID); ?>;}
/*------　コンテンツ背景（標準画像）　------*/
.bgi {background:url(<?php the_field( 'bg_i',$post->ID); ?>) left top repeat-y;}
/*------　コンテンツ背景（ワイド画像）　------*/
.bgiw {background:url(<?php the_field( 'bg_iw',$post->ID); ?>) left top repeat-y;}
/*------　レスポンシブ　------*/
@media only screen and (max-width: 899px){
.bgi, .bgiw {background: none;}
#onelp,#onelpL,#onelpN,#onelpw,#onelpLw,#onelpNw {width:100%;}
.onecont img,.onecontw img {max-width:100%;}
#onelp .onecont,#onelpL .onecont,#onelpN .onecont,#onelpw .onecontw,#onelpLw .onecontw,#onelpNw .onecontw {width:95%;}
.onecoln .side_m,.onecolw .side_m {padding: 10px;}}
/*------　キャッチコピー　------*/
.lp_catch_main {font-family:<?php the_field('lp_catch_main_font',$post->ID); ?>;font-size:<?php the_field('lp_catch_main_fsize',$post->ID); ?>;color:<?php the_field('lp_catch_main_color',$post->ID); ?>;margin-top:0;margin-bottom:10px;font-weight:bold;line-height:1.2;}
.lp_catch_sub {font-family:<?php the_field('lp_catch_sub_font',$post->ID); ?>;font-size:<?php the_field('lp_catch_sub_fsize',$post->ID); ?>;color:<?php the_field('lp_catch_sub_color',$post->ID); ?>;margin-top:0;margin-bottom:0;font-weight:bold;line-height:1.5;}
<?php if (is_mobile()) :?>
.lp_catch_main {font-family: "Meiryo","Meiryo UI","メイリオ",arial,"ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",Osaka,"ＭＳ Ｐゴシック","MS PGothic",Sans-Serif;font-size:25px;line-height:1.5;}
.lp_catch_sub {font-family: "Meiryo","Meiryo UI","メイリオ",arial,"ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",Osaka,"ＭＳ Ｐゴシック","MS PGothic",Sans-Serif;font-size:20px;line-height:1.5;}
<?php endif; ?>
/*------　アクション部分　------*/
.lp_action_up {font-family:<?php the_field('lp_action_title_font',$post->ID); ?>;font-size:<?php the_field('lp_action_title_fsize',$post->ID); ?>;color:<?php the_field('lp_action_title_color',$post->ID); ?>;margin-top:0;margin-bottom:10px;font-weight:bold;}
.merit_mark {color:<?php the_field('lp_merit_color',$post->ID); ?>;}
.free_btn {background:<?php the_field('lp_action_btn_color',$post->ID); ?>;}
.free_btn:hover {background:<?php the_field('lp_action_btn_colorh',$post->ID); ?>;}
<?php if (is_mobile()) :?>
.lp_action_up {font-family: "Meiryo","Meiryo UI","メイリオ",arial,"ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",Osaka,"ＭＳ Ｐゴシック","MS PGothic",Sans-Serif;font-size:25px;line-height:1.5;}
<?php endif; ?>
/*------　導入・きっかけ　------*/
.lp_intro_title01 {font-family:<?php the_field('lp_intro_title01_font',$post->ID); ?>;font-size:<?php the_field('lp_intro_title01_fsize',$post->ID); ?>;color:<?php the_field('lp_intro_title01_color',$post->ID); ?>;}
.lp_intro_title02 {font-family:<?php the_field('lp_intro_title02_font',$post->ID); ?>;font-size:<?php the_field('lp_intro_title02_fsize',$post->ID); ?>;color:<?php the_field('lp_intro_title02_color',$post->ID); ?>;margin-top:0;margin-bottom:20px;font-weight:bold;}
<?php if (is_mobile()) :?>
.lp_intro_title01,.lp_intro_title02 {font-family: "Meiryo","Meiryo UI","メイリオ",arial,"ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",Osaka,"ＭＳ Ｐゴシック","MS PGothic",Sans-Serif;font-size:25px;line-height:1.5;}
<?php endif; ?>
/*------　ベネフィット　------*/
.lp_benefit_title01 {font-family:<?php the_field('lp_benefit_title01_font',$post->ID); ?>;font-size:<?php the_field('lp_benefit_title01_fsize',$post->ID); ?>;color:<?php the_field('lp_benefit_title01_color',$post->ID); ?>;}
.lp_benefit_title02 {font-family:<?php the_field('lp_benefit_title02_font',$post->ID); ?>;font-size:<?php the_field('lp_benefit_title02_fsize',$post->ID); ?>;color:<?php the_field('lp_benefit_title02_color',$post->ID); ?>;margin-top:0;margin-bottom:20px;font-weight:bold;}
<?php if (is_mobile()) :?>
.lp_benefit_title01,.lp_benefit_title02 {font-family: "Meiryo","Meiryo UI","メイリオ",arial,"ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",Osaka,"ＭＳ Ｐゴシック","MS PGothic",Sans-Serif;font-size:25px;line-height:1.5;}
<?php endif; ?>
/*------　商品・サービス説明　------*/
.lp_item_title01 {font-family:<?php the_field('lp_item_title01_font',$post->ID); ?>;font-size:<?php the_field('lp_item_title01_fsize',$post->ID); ?>;color:<?php the_field('lp_item_title01_color',$post->ID); ?>;}
.lp_item_title02 {font-family:<?php the_field('lp_item_title02_font',$post->ID); ?>;font-size:<?php the_field('lp_item_title02_fsize',$post->ID); ?>;color:<?php the_field('lp_item_title02_color',$post->ID); ?>;}
<?php if (is_mobile()) :?>
.lp_item_title01,.lp_item_title02 {font-family: "Meiryo","Meiryo UI","メイリオ",arial,"ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",Osaka,"ＭＳ Ｐゴシック","MS PGothic",Sans-Serif;font-size:25px;line-height:1.5;}
<?php endif; ?>
/*------　お客さまの声　------*/
.lp_voice_title {font-family:<?php the_field('lp_voice_title_font',$post->ID); ?>;font-size:<?php the_field('lp_voice_title_fsize',$post->ID); ?>;color:<?php the_field('lp_voice_title_color',$post->ID); ?>;}
<?php if (is_mobile()) :?>
.lp_voice_title {font-family: "Meiryo","Meiryo UI","メイリオ",arial,"ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",Osaka,"ＭＳ Ｐゴシック","MS PGothic",Sans-Serif;font-size:25px;line-height:1.5;}
<?php endif; ?>
/*------　FAQ（よくある質問）　------*/
.lp_faq_title {font-family:<?php the_field('lp_faq_title_font',$post->ID); ?>;font-size:<?php the_field('lp_faq_title_fsize',$post->ID); ?>;color:<?php the_field('lp_faq_title_color',$post->ID); ?>;}
<?php if (is_mobile()) :?>
.lp_faq_title {font-family: "Meiryo","Meiryo UI","メイリオ",arial,"ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",Osaka,"ＭＳ Ｐゴシック","MS PGothic",Sans-Serif;font-size:25px;line-height:1.5;}
<?php endif; ?>
/*------　各セクション背景カラー　------*/
.section01 {background:<?php the_field('lp_logo_bgcolor',$post->ID); ?>;}
<?php if(post_custom('lp_main_bgcolor')): ?>
.section02 {background:<?php the_field('lp_main_bgcolor',$post->ID); ?>;}
<?php else: ?>
.section02 {background:url(<?php the_field('lp_main_bgimg',$post->ID); ?>);background-attachment: fixed;background-position:center center;}
<?php endif; ?>
.section03 {background:<?php the_field('lp_action_bgcolor',$post->ID); ?>;}
<?php if(post_custom('lp_intro_bgcolor')): ?>
.section04 {background:<?php the_field('lp_intro_bgcolor',$post->ID); ?>;}
<?php else: ?>
.section04 {background:url(<?php the_field('lp_intro_bgimg',$post->ID); ?>);background-attachment: fixed;background-position:center center;}
<?php endif; ?>
<?php if(post_custom('lp_benefit_bgcolor')): ?>
.section05 {background:<?php the_field('lp_benefit_bgcolor',$post->ID); ?>;}
<?php else: ?>
.section05 {background:url(<?php the_field('lp_benefit_bgimg',$post->ID); ?>);background-attachment: fixed;background-position:center center;}
<?php endif; ?>
<?php if(post_custom('lp_item_bgcolor')): ?>
.section06 {background:<?php the_field('lp_item_bgcolor',$post->ID); ?>;}
<?php else: ?>
.section06 {background:url(<?php the_field('lp_item_bgimg',$post->ID); ?>);background-attachment: fixed;background-position:center center;}
<?php endif; ?>
<?php if(post_custom('lp_voice_bgcolor')): ?>
.section07 {background:<?php the_field('lp_voice_bgcolor',$post->ID); ?>;}
<?php else: ?>
.section07 {background:url(<?php the_field('lp_voice_bgimg',$post->ID); ?>);background-attachment: fixed;background-position:center center;}
<?php endif; ?>
<?php if(post_custom('lp_faq_bgcolor')): ?>
.section08 {background:<?php the_field('lp_faq_bgcolor',$post->ID); ?>;}
<?php else: ?>
.section08 {background:url(<?php the_field('lp_faq_bgimg',$post->ID); ?>);background-attachment: fixed;background-position:center center;}
<?php endif; ?>
<?php if(post_custom('lp_editor_bgcolor')): ?>
.section09 {background:<?php the_field('lp_editor_bgcolor',$post->ID); ?>;}
<?php else: ?>
.section09 {background:url(<?php the_field('lp_editor_bgimg',$post->ID); ?>);background-attachment: fixed;background-position:center center;}
<?php endif; ?>
/*------　フォントサイズ　------*/
.p_size p, .lp_item_info_lup p, .lp_item_info_ldw p, .lp_faq_a p, .lp_free p, .lp_action_free p, .content09 p {font-family:<?php the_field('lp_text_font',$post->ID); ?>;font-size:<?php the_field('lp_text_fsize',$post->ID); ?>;line-height:1.6;margin-bottom:20px;}
<?php if (wp_is_mobile()) :?>
.p_size p, .lp_item_info_lup p, .lp_item_info_ldw p, .lp_faq_a p, .lp_free p, .lp_action_free p, .content09 p {font-family:"Meiryo","Meiryo UI","メイリオ",arial,"ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",Osaka,"ＭＳ Ｐゴシック","MS PGothic",Sans-Serif;}
<?php endif; ?>
/*------　スマホ　マージン調整　------*/
<?php if (is_mobile()) :?>
.lp_free, .lp_free p {margin-bottom: 0;}
<?php endif; ?>
</style>