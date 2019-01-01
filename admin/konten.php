
<?php 
    if ($_GET['page']=='home') {
      echo '<div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>Orders</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">30% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">10,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 8%;" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Tax Deduction</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red">15% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">5,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Revenue</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">$70,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-blue"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Yearly Sales</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-purple">80% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">$100,000</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-purple"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }

    elseif ($_GET['page']=='update_info') {
        echo '<div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
                            
                            <table>
                                <tr>
                                    <th>Previes Image</th>
                                    <th>Post Title</th>
                                    <th>Tag</th>
                                    <th>Post item</th>
                                    <th>Posted</th>
                                    <th>Setting</th>
                                </tr>';
                                $crud=mysqli_query($koneksi, "SELECT * FROM news ORDER BY id_berita DESC");
                                while ($data=mysqli_fetch_array($crud)) {
                                echo '<tr>
                                    
                                    <td><img src="img/news/'."$data[foto]".'" alt="" /></td>
                                    <td>'."$data[judul]".'</td>
                                    <td>
                                        <button class="'."$data[tag]".'">'."$data[tag]".'</button>
                                    </td>
                                    <td>'."$data[isi]".'</td>
                                    <td>'."$data[id_admin]".'</td>
                                    <td><a href="index.php?page=edit&id='."$data[id_berita]".'" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                         || 
                                        <a href="index.php?page=delete&id='."$data[id_berita]".'" data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>';
                                }

                                echo '
                                
                                
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }
    elseif ($_GET['page']=='update_personal') {
        echo '<div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Product Edit</a></li>
                                    <li><a href="#reviews"><i class="icon nalika-picture" aria-hidden="true"></i> Pictures</a></li>
                                    <li><a href="#INFORMATION"><i class="icon nalika-chat" aria-hidden="true"></i> Review</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="First Name">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Product Title">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Regular Price">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Tax">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Quantity">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Last Name">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Product Description">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Sale Price">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Category">
                                                    </div>
                                                    <select name="select" class="form-control pro-edt-select form-control-primary">
                                                            <option value="opt1">Select One Value Only</option>
                                                            <option value="opt2">2</option>
                                                            <option value="opt3">3</option>
                                                            <option value="opt4">4</option>
                                                            <option value="opt5">5</option>
                                                            <option value="opt6">6</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
                                                        </button>
                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light">Discard
                                                        </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="reviews">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="pro-edt-img">
                                                                <img src="img/new-product/5-small.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="product-edt-pix-wrap">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">TT</span>
                                                                            <input type="text" class="form-control" placeholder="Label Name">
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-radio">
                                                                                    <form>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
                                                                                                    <input type="radio" name="radio"><i class="helper"></i>Largest Image
                                                                                                </label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
                                                                                                    <input type="radio" name="radio"><i class="helper"></i>Medium Image
                                                                                                </label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
                                                                                                    <input type="radio" name="radio"><i class="helper"></i>Small Image
                                                                                                </label>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="product-edt-remove">
                                                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light">Remove
                                                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                                                        </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="pro-edt-img">
                                                                <img src="img/new-product/6-small.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="product-edt-pix-wrap">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">TT</span>
                                                                            <input type="text" class="form-control" placeholder="Label Name">
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-radio">
                                                                                    <form>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
                                                                                                    <input type="radio" name="radio"><i class="helper"></i>Largest Image
                                                                                                </label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
                                                                                                    <input type="radio" name="radio"><i class="helper"></i>Medium Image
                                                                                                </label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
                                                                                                    <input type="radio" name="radio"><i class="helper"></i>Small Image
                                                                                                </label>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="product-edt-remove">
                                                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light">Remove
                                                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                                                        </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="pro-edt-img mg-b-0">
                                                                <img src="img/new-product/7-small.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="product-edt-pix-wrap">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">TT</span>
                                                                            <input type="text" class="form-control" placeholder="Label Name">
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-radio">
                                                                                    <form>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
                                                                                                    <input type="radio" name="radio"><i class="helper"></i>Largest Image
                                                                                                </label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
                                                                                                    <input type="radio" name="radio"><i class="helper"></i>Medium Image
                                                                                                </label>
                                                                                        </div>
                                                                                        <div class="radio radiofill">
                                                                                            <label>
                                                                                                    <input type="radio" name="radio"><i class="helper"></i>Small Image
                                                                                                </label>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="product-edt-remove">
                                                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light">Remove
                                                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                                                        </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="card-block">
                                                        <div class="text-muted f-w-400">
                                                            <p>No reviews yet.</p>
                                                        </div>
                                                        <div class="m-t-10">
                                                            <div class="txt-primary f-18 f-w-600">
                                                                <p>Your Rating</p>
                                                            </div>
                                                            <div class="stars stars-example-css detail-stars">
                                                                <div class="review-rating">
                                                                    <fieldset class="rating">
                                                                        <input type="radio" id="star5" name="rating" value="5">
                                                                        <label class="full" for="star5"></label>
                                                                        <input type="radio" id="star4half" name="rating" value="4 and a half">
                                                                        <label class="half" for="star4half"></label>
                                                                        <input type="radio" id="star4" name="rating" value="4">
                                                                        <label class="full" for="star4"></label>
                                                                        <input type="radio" id="star3half" name="rating" value="3 and a half">
                                                                        <label class="half" for="star3half"></label>
                                                                        <input type="radio" id="star3" name="rating" value="3">
                                                                        <label class="full" for="star3"></label>
                                                                        <input type="radio" id="star2half" name="rating" value="2 and a half">
                                                                        <label class="half" for="star2half"></label>
                                                                        <input type="radio" id="star2" name="rating" value="2">
                                                                        <label class="full" for="star2"></label>
                                                                        <input type="radio" id="star1half" name="rating" value="1 and a half">
                                                                        <label class="half" for="star1half"></label>
                                                                        <input type="radio" id="star1" name="rating" value="1">
                                                                        <label class="full" for="star1"></label>
                                                                        <input type="radio" id="starhalf" name="rating" value="half">
                                                                        <label class="half" for="starhalf"></label>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                        <div class="input-group mg-b-15 mg-t-15">
                                                            <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="User Name">
                                                        </div>
                                                        <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="Last Name">
                                                        </div>
                                                        <div class="input-group mg-b-15">
                                                            <span class="input-group-addon"><i class="icon nalika-mail" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" placeholder="Email">
                                                        </div>
                                                        <div class="form-group review-pro-edt mg-b-0-pt">
                                                            <button type="submit" class="btn btn-ctl-bt waves-effect waves-light">Submit
                                                                </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }
    elseif ($_GET['page']=='new-post') {
        echo '<div class="single-pro-review-area mt-t-30 mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTab4" class="tab-review-design">
                                <li class="active"><a href="?page=new-post#news">News</a></li>
                                <li><a href="?page=new-post#match-update">Match update</a></li>
                                <li><a href="?page=new-post#rating">Match Rating</a></li>
                                <li><a href="?page=new-post#tournament">Tournament</a></li>
                                <li><a href="?page=new-post#galery">Add new galery</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                            <img id="blah" src="#" alt="your image" style="width: 200px; height: 200px;border-radius: 10%; float:inline-end"/>
                                <div class="product-tab-list tab-pane fade active in" id="news">
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="demo-container">
                                                    <form method="POST" action="../include/upload.php" class="payment-form mg-t-30" id="form1" runat="server" enctype="multipart/form-data">
                                                        <div class="breadcomb-ctn" style="margin-left:0px;">
                                                            <h2>Select an image for the post</h2>
                                                            <div class="form-group" style="margin-left: 30%;">
                                                                <input name="image" type="file" onchange="readURL(this);" style="margin-left: 15%;"/>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="tag" type="text" class="form-control" placeholder="Tag berita">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="judul" type="text" class="form-control" placeholder="Judul Berita">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea name="isi" type="text" class="form-control" placeholder="Isi Berita">Isi Berita</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="tab" type="hidden" class="form-control" value="news">
                                                        </div>
                                                        <div class="text-center credit-card-custom">
                                                            <input type="submit" class="btn bg-btn-cl waves-effect waves-light" value="Submit">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        
                                        <div class="col-lg-3"></div>
                                    </div>
                                </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="match-update">
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="demo-container">
                                                    
                                                    <form method="POST" action="../include/upload.php" class="payment-form mg-t-30" id="form2" runat="server" enctype="multipart/form-data">
                                                        <div class="breadcomb-ctn" style="margin-left:0px;">
                                                            <h2>Select an image for the post</h2>
                                                            <div class="form-group" style="margin-left: 30%;">
                                                                <input name="image" type="file" onchange="readURL(this);" style="margin-left: 15%;"/>
                                                            </div>
                                                        </div>
                                                        <select class="form-control mg-b-15" name="kompetisi">
                                                                <option value="kosong">--Select Competition--</option>
                                                                <option value="Serie A Italia">Serie A Italia</option>
                                                                <option value="Champions League">Champions League</option>
                                                                <option value="Super Copa De Italy">Super Copa De Italy</option>
                                                            </select>
                                                        <div class="form-group">
                                                            <input name="hasil" type="text" class="form-control" placeholder="Hasil Pertandingan">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="mvp" type="text" class="form-control" placeholder="MVP Pertandingan">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="tab" type="hidden" class="form-control" value="match-update">
                                                        </div>
                                                        <div class="text-center credit-card-custom">
                                                            <input type="submit" class="btn bg-btn-cl waves-effect waves-light" value="Submit">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        
                                        <div class="col-lg-3"></div>
                                    </div>
                                </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="rating">
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                            <form method="POST" action="../include/upload.php" class="payment-form mg-t-30" id="form2" runat="server" enctype="multipart/form-data">
                                                        <div class="breadcomb-ctn" style="margin-left:0px;">
                                                            <h2>Select an image for the post</h2>
                                                            <div class="form-group" style="margin-left: 30%;">
                                                                <input name="image" type="file" onchange="readURL(this);" style="margin-left: 15%;"/>
                                                            </div>
                                                        </div>
                                                        <select class="form-control mg-b-15" name="id_pos">
                                                                <option value="kosong">--Select Player Position--</option>
                                                                <option value="1">Goalkeeper</option>
                                                                <option value="2">Defender</option>
                                                                <option value="3">Midfielder</option>
                                                                <option value="4">Striker</option>
                                                            </select>
                                                        <div class="form-group">
                                                            <input name="nama" type="text" class="form-control" placeholder="Nama Pemain">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="rating" type="text" class="form-control" placeholder="Rating Pemain">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="deskripsi" type="text" class="form-control" placeholder="Deskripsi Permainan">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="tab" type="hidden" class="form-control" value="rating">
                                                        </div>
                                                        <div class="text-center credit-card-custom">
                                                            <input type="submit" class="btn bg-btn-cl waves-effect waves-light" value="Submit">
                                                        </div>
                                                    </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-3"></div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="tournament">
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                            <form method="POST" action="../include/upload.php" class="payment-form mg-t-30" id="form2" runat="server" enctype="multipart/form-data">
                                                        <div class="breadcomb-ctn" style="margin-left:0px;">
                                                            <h2>Select an image for the post</h2>
                                                            <div class="form-group" style="margin-left: 30%;">
                                                                <input name="image" type="file" onchange="readURL(this);" style="margin-left: 15%;"/>
                                                            </div>
                                                        </div>
                                                        <select class="form-control mg-b-15" name="tournament">
                                                                <option value="kosong">--Select Tournament Category--</option>
                                                                <option value="Platinum Tournament">Platinum</option>
                                                                <option value="Premium Tournament">Premium</option>
                                                                <option value="Basic Tournament">Basic</option>
                                                            </select>
                                                        <div class="form-group">
                                                            <input name="judul" type="text" class="form-control" placeholder="Judul Turnamen">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="hadiah" type="text" class="form-control" placeholder="Hadiah">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="waktu" type="text" class="form-control" placeholder="Tanggal dibuka pendaftaran">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="batas" type="text" class="form-control" placeholder="Batas akhir pendaftaran">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="quota" type="text" class="form-control" placeholder="Jumlah Kuota Peserta/Tim ">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="lokasi" type="text" class="form-control" placeholder="Lokasi">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="tab" type="hidden" class="form-control" value="tournament">
                                                        </div>
                                                        <div class="text-center credit-card-custom">
                                                            <input type="submit" class="btn bg-btn-cl waves-effect waves-light" value="Submit">
                                                        </div>
                                                    </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-3"></div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="galery">
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="demo-container">
                                                    
                                                    <form method="POST" action="../include/upload.php" class="payment-form mg-t-30" id="form3" runat="server" enctype="multipart/form-data">
                                                        <div class="breadcomb-ctn" style="margin-left:0px;">
                                                            <h2>Select an image for the post</h2>
                                                            <div class="form-group" style="margin-left: 30%;">
                                                                <input name="image" type="file" onchange="readURL(this);" style="margin-left: 15%;"/>
                                                                <img id="blah" src="#" alt="your image" style="width: 200px; height: 200px;border-radius: 10%;"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="caption" type="text" class="form-control" placeholder="Caption">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="tab" type="hidden" class="form-control" value="galery">
                                                        </div>
                                                        <div class="text-center credit-card-custom">
                                                            <input type="submit" class="btn bg-btn-cl waves-effect waves-light" value="Submit">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        
                                        <div class="col-lg-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }
    elseif ($_GET['page']=='delete') {
        mysqli_query($koneksi,"DELETE FROM news where id_berita='$_GET[id]'");
        echo '<p style="color:white;">Delete Berhasil!</p>';
    }

    elseif ($_GET['page']=='edit') {
          $ambil=mysqli_query($koneksi, "SELECT * FROM news WHERE id_berita='$_GET[id]'");
          $dapat=mysqli_fetch_array($ambil);
          $tag=$dapat['tag'];
          $judul=$dapat['judul'];
          $isi=$dapat['isi'];
          $admin = $_SESSION['namauser'];
          $foto = $dapat['foto'];
        echo '<div class="single-pro-review-area mt-t-30 mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTab4" class="tab-review-design">
                                <li class="active"><a href="?page=new-post#news">Edit Berita</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                            <img id="blah" src="#" alt="your image" style="width: 200px; height: 200px;border-radius: 10%; float:inline-end"/>
                                <div class="product-tab-list tab-pane fade active in" id="news">
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="demo-container">
                                                    <form method="POST" action="../include/upload.php?page=edit&id='."$_GET[id]".'" class="payment-form mg-t-30" id="form1" runat="server" enctype="multipart/form-data">
                                                        <div class="breadcomb-ctn" style="margin-left:0px;">
                                                            <h2>Select an image for the post</h2>
                                                            <div class="form-group" style="margin-left: 30%;">
                                                                <input name="image" type="file" onchange="readURL(this);" style="margin-left: 15%;"/>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="tag" type="text" class="form-control" value="'."$tag".'">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="judul" type="text" class="form-control" value="'."$judul".'">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea name="isi" type="text" class="form-control" placeholder="Isi Berita">'."$isi".'</textarea>
                                                        </div>
                                                        <div class="text-center credit-card-custom">
                                                            <input type="submit" class="btn bg-btn-cl waves-effect waves-light" value="Submit">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        
                                        <div class="col-lg-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
  }
          
          

?>