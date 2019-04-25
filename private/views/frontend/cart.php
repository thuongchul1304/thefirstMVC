<div class="top_nav_right">
	<div class="shoecart shoecart2 cart cart box_1">
		<div id="staplesbmincart">
			<form method="post" class="" action="" target="">    
				<button type="button" class="sbmincart-closer" onclick="setVisibility('staplesbmincart', 'none');">×</button>    
				<?php 	
				$tongtien=0;							
				if (isset($_SESSION['cart']) AND $_SESSION['cart']!= null):?>
					<ul>                
						<?php foreach ($_SESSION['cart'] as $key => $val): 
							$tongtien+=$_SESSION['cart'][$key]['Price']*$_SESSION['cart'][$key]['qty']; 						
							?>
							<li class="sbmincart-item">            
								<div class="sbmincart-details-name">                
									<a class="sbmincart-name" href="http://localhost/web/frontend/shop/index#"><?=$val['Name']?>
								</a>                
								<ul class="sbmincart-attributes"></ul>            
							</div>            
							<div class="sbmincart-details-quantity">                
								<input class="sbmincart-quantity" disabled type="text"  value="<?=$_SESSION['cart'][$key]['qty']?>" autocomplete="off">
							</div>            
							<div class="sbmincart-details-remove">                
								<button type="button" class="sbmincart-remove remove" data-sbmincart-idx="<?=$val['Id']?>">×</button>            
							</div>            
							<div class="sbmincart-details-price">                
								<span class="sbmincart-price">$<?=$val['Price']?></span>            
							</div>           
							
						</li>   
					<?php endforeach ?>

				</ul>
				<div class="sbmincart-footer">                    
					<div class="sbmincart-subtotal"><p class="totalsub">Subtotal: $<?php 	echo  $tongtien ;?> USD</p>
					</div>            
					<a href="<?php echo BASE_URL ?>/frontend/checkout/" class="sbmincart-submit" type="submit" data-sbmincart-alt="undefined">Check Out
					</a>            
				</div>   
				<?php else: ?> 
					<p class="sbmincart-empty-text" style="text-align: center;">Giỏ hàng trống <br>
						Let Buy Now
					</p>
				<?php endif ?>  
			</form>
		</div>
		<button class="top_shoe_cart" type="submit" name="submit" value="" onclick="setVisibility('staplesbmincart', 'inline');">
			<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
		</button>
	</div>
</div>
