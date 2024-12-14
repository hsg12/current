<section id="modal-section">
	<?php define('PAGE_PROTOCOL', (isset($_SERVER['https']) && $_SERVER['https'] === 'on') ? 'https' : 'http' ); ?>
	<button type="button" class="share-btn floating-share-btn" data-toggle="modal" data-target="#shareModal" >
		<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path fill-rule="evenodd" clip-rule="evenodd" d="M13 6C13 6.33707 13.0417 6.6644 13.1202 6.97712L8.9212 9.26748C8.19127 8.48747 7.15256 8 6 8C3.79086 8 2 9.79086 2 12C2 14.2091 3.79086 16 6 16C7.15259 16 8.19131 15.5125 8.92125 14.7325L13.1202 17.0228C13.0417 17.3356 13 17.6629 13 18C13 20.2091 14.7909 22 17 22C19.2091 22 21 20.2091 21 18C21 15.7909 19.2091 14 17 14C15.8474 14 14.8087 14.4875 14.0788 15.2675L9.87979 12.9771C9.95831 12.6644 10 12.3371 10 12C10 11.6629 9.9583 11.3355 9.87978 11.0228L14.0787 8.73246C14.8087 9.51251 15.8474 10 17 10C19.2091 10 21 8.20914 21 6C21 3.79086 19.2091 2 17 2C14.7909 2 13 3.79086 13 6ZM17 8C18.1046 8 19 7.10457 19 6C19 4.89543 18.1046 4 17 4C15.9117 4 15.0264 4.86931 15.0006 5.95146C15.0002 5.96759 15 5.98377 15 6C15 6.72279 15.3834 7.35603 15.958 7.70742C16.2614 7.89303 16.6182 8 17 8ZM6 10C6.38174 10 6.7385 10.1069 7.04195 10.2925C7.61654 10.6439 8 11.2772 8 12C8 12.7228 7.61657 13.3561 7.04201 13.7074C6.73855 13.893 6.38177 14 6 14C4.89543 14 4 13.1046 4 12C4 10.8954 4.89543 10 6 10ZM15.958 16.2925C15.3834 16.6439 15 17.2772 15 18C15 18.0162 15.0002 18.0324 15.0006 18.0485C15.0263 19.1306 15.9116 20 17 20C18.1046 20 19 19.1046 19 18C19 16.8954 18.1046 16 17 16C16.6182 16 16.2615 16.107 15.958 16.2925Z" fill="black"/>
		</svg>
		<span class="sr-only">Share this page</span>
	</button>

	<div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModal">
		<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header justify-content-center border-0 pb-0 bg-transparent font-weight-bold">
					Share this page
					<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12 13.0607L17.4696 18.5303L18.5303 17.4697L13.0606 12.0001L18.5304 6.53033L17.4697 5.46967L12 10.9394L6.53026 5.46967L5.4696 6.53033L10.9393 12.0001L5.46972 17.4697L6.53038 18.5303L12 13.0607Z" fill="black"/>
						</svg></span></button> -->
				</div>
				<div class="modal-body pt-2">
					<div class="share-btns">
						<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo htmlspecialchars(PAGE_PROTOCOL.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>" class="btn-linkedin" onclick="return !window.open(this.href, 'linkedin ', 'width=500,height=500')"
						target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/></svg> 
						</a>
	
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo htmlspecialchars(PAGE_PROTOCOL.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>" class="btn-facebook" onclick="return !window.open(this.href, 'facebook ', 'width=500,height=500')"
						target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg> 
						</a>
	
						<a href="https://www.twitter.com/intent/tweet?url=<?php echo htmlspecialchars(PAGE_PROTOCOL.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>" class="btn-twitter" onclick="return !window.open(this.href, 'twitter ', 'width=500,height=500')"
						target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg> 
						</a>
	
						<a href="https://www.reddit.com/submit?url=<?php echo htmlspecialchars(PAGE_PROTOCOL.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>" class="btn-reddit" onclick="return !window.open(this.href, 'redit ', 'width=500,height=500')"
						target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M373 138.6c-25.2 0-46.3-17.5-51.9-41l0 0c-30.6 4.3-54.2 30.7-54.2 62.4l0 .2c47.4 1.8 90.6 15.1 124.9 36.3c12.6-9.7 28.4-15.5 45.5-15.5c41.3 0 74.7 33.4 74.7 74.7c0 29.8-17.4 55.5-42.7 67.5c-2.4 86.8-97 156.6-213.2 156.6S45.5 410.1 43 323.4C17.6 311.5 0 285.7 0 255.7c0-41.3 33.4-74.7 74.7-74.7c17.2 0 33 5.8 45.7 15.6c34-21.1 76.8-34.4 123.7-36.4l0-.3c0-44.3 33.7-80.9 76.8-85.5C325.8 50.2 347.2 32 373 32c29.4 0 53.3 23.9 53.3 53.3s-23.9 53.3-53.3 53.3zM157.5 255.3c-20.9 0-38.9 20.8-40.2 47.9s17.1 38.1 38 38.1s36.6-9.8 37.8-36.9s-14.7-49.1-35.7-49.1zM395 303.1c-1.2-27.1-19.2-47.9-40.2-47.9s-36.9 22-35.7 49.1c1.2 27.1 16.9 36.9 37.8 36.9s39.3-11 38-38.1zm-60.1 70.8c1.5-3.6-1-7.7-4.9-8.1c-23-2.3-47.9-3.6-73.8-3.6s-50.8 1.3-73.8 3.6c-3.9 .4-6.4 4.5-4.9 8.1c12.9 30.8 43.3 52.4 78.7 52.4s65.8-21.6 78.7-52.4z"/></svg> 
						</a>
					</div><!-- /.share-btns -->
					
				</div><!-- /.modal-body -->
				<div class="modal-footer p-0">
					<button type="button" class="btn btn-link d-block w-100" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</section><!-- /#modal-section -->


