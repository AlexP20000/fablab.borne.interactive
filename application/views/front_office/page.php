    <div id="pagTitle" class="w3-container w3-container w3-mobile">
        <h1><a href="<?php echo base_url(); ?>"><?php echo $page['pag_titre']; ?></h1>
    </div>
    <div id="mainImgDescContainer" class="w3-container w3-mobile">
        <div class="w3-card">
        <img src="<?php echo base_url(); ?>images/11.jpeg" alt="image 11" class="mainImg">
        <div id="description" class="w3-container">
            <div class="w3-ul w3-hover-light-gray">
                <li class="w3-bar">
                    <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-xlarge w3-right">&times;</span>
                    <img src="<?php echo base_url(); ?>images/books.png" class="w3-bar-item" style="width:85px">
                    <div class="w3-bar-item descriptionText">
                        <span class="w3-large"><?php echo $page['pag_titre']; ?></span>
                        <br>
						<span><?php echo $page['pag_description']; ?></span>
                    </div>
                </li>
            </div>
        </div>
    </div>
</div>
    <!-- begin region of small images -->
    <div id="images" class="w3-container w3-cell-row">
            <div class="w3-third w3-cell w3-padding">
                    <div class="w3-card card-color">
                      <img src="<?php echo base_url(); ?>images/17.jpeg" style="width:100%">
                      <div class="w3-container smallImageDescription">
                        <h4>Image 1</h4>
                      </div>
                    </div>
            </div>
            <div class="w3-third w3-cell w3-padding">
                    <div class="w3-card card-color">
                      <img src="<?php echo base_url(); ?>images/17.jpeg" style="width:100%">
                      <div class="w3-container smallImageDescription">
                        <h4>Image 2</h4>
                      </div>
                    </div>
            </div>
            <div class="w3-third w3-cell w3-padding">
                    <div class="w3-card card-color">
                      <img src="<?php echo base_url(); ?>images/17.jpeg" style="width:100%">
                      <div class="w3-container smallImageDescription">
                        <h4>Image 3</h4>
                      </div>
                    </div>
            </div>
    </div>
    <!-- end region of small images -->
    <!-- begin region link to another pag -->
    <div id="bottomPageLink" class="w3-container img-responsive"><a href="#" target="_blank">Lien</a></div>
	<!-- end region link to another pag -->
