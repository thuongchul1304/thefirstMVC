				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

					<nav>
						<ul>
							<?php foreach ($data as $value): ?>
								<li><a href="http://localhost/web/frontend/<?=$value['Link']?>/index" class="active"><?=$value['Name']?></a></li>
							<?php endforeach ?>
							<?php if (isset($_COOKIE['username'])): ?>
								<li><a href="http://localhost/web/frontend/register/logout" class="active">Đăng xuất</a></li>
							<?php endif ?>
						</ul>
					</nav>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>