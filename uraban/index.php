<?php







/**







 * acg和谐区第二版，也是里世界第一版







 * 







 * @package acg和谐区第二版







 * @author 世界倒数第一公主殿下







 * @version 1.0







 * @link http://www.uraban.me







 */















if (!defined('__TYPECHO_ROOT_DIR__')) exit;







 $this->need('header.php');











 ?>















<div class="mainer">







<div class="post">



<div class="ad_top">



 <?php $this->options->SiteAD_1() ?>
 <?php $this->options->SiteAD_5() ?>


</div>



		<?php while($this->next()): ?>















		<article>




<h1><a href="<?php $this->permalink() ?>"><?php $this->title(30) ?></a></h1><div class="pinglun"> <span><?php $this->commentsNum('%d'); ?></span>

</div>







			<li class="post_top">







				<span><?php $this->date('F j, Y'); ?>&emsp;/&emsp;</span>







				<span>From <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></span>







			</li>







		<?php $this->content('- 阅读剩余 -'); ?><div class="clear"></div>







		<li class="post_bottom">











<span><?php $this->category(','); ?></span>



























		</li>












			

		</article>


<?php if ($this->sequence == 1) : ?>

<?php endif; ?>



	<?php endwhile; ?>



			<div class="ad_top">



 <?php $this->options->SiteAD_2() ?></div>



      <?php $this->pageNav('&laquo;', '&raquo;'); ?>







</div>















<?php $this->need('sidebar.php'); ?>







<?php $this->need('footer.php'); ?>